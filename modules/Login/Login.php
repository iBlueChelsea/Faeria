<?php

require_once "modules/Module.php";

class Login extends Module
{
    public function getContent()
    {
        $salt = 'SaltyboizZz*';

        if (($_POST['username'] ?? null) && ($_POST['pw'] ?? null)) {
            $sql = $this->db->prepare('SELECT id, name FROM users
                WHERE name = :username');
            $sql->execute([':username' => $_POST['username']]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                $check = hash('md5', $salt.$_POST['pw']);
                $sql = $this->db->prepare('SELECT id, name, password FROM users
                    WHERE name = :username AND password = :pw');
                $sql->execute([':username' => $_POST['username'], ':pw' => $check]);
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                if ($row) {
                    $_SESSION['user'] = $row['id'];
                    unset($_SESSION['error']);
                    header('Location: index.php?module=Home');
                    return;
                } else {
                    header('Location: index.php?module=Login');
                    $_SESSION['error'] = 'Username already taken or wrong password.';
                    return;         
                }
            } else {
                $hash = md5($salt.$_POST['pw']);
                $sql = $this->db->prepare('INSERT INTO users (name,password) VALUES (:username, :pw)');
                $sql->execute([':username' => $_POST['username'], ':pw' => $hash]);
                $id = $this->db->lastInsertId();

                $_SESSION['user'] = $id;
                unset($_SESSION['error']);
                header('Location: index.php?module=Home');
                return;
            }
        }

        $this->smarty->assign('error',$_SESSION['error'] ?? null);
    }
}