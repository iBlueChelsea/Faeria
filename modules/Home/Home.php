<?php

require_once "modules/Module.php";

class Home extends Module
{
    public function getContent()
    {
        $this->smarty->assign('errorMsg', '');
        $this->smarty->assign('options', $this->getDecks());

        if ($_POST['play'] ?? null){
            if ($_POST['deck'] > 0) {
                $_SESSION['deck'] = $_POST['deck'];
                header('Location: index.php?module=Play');
            } else {
                $this->smarty->assign('errorMsg', 'Please select a deck!');
            }
            return;
        }
        if ($_POST['deckbuilder'] ?? null){
            header('Location: index.php?module=DeckBuilder');
            return;
        }
        if ($_POST['logout'] ?? null){
            unset($_SESSION['user']);
            header('Location: index.php?module=Login');
            return;
        }
    }

    private function getDecks()
    {
        $sql = $this->db->prepare('SELECT * FROM decks WHERE player = :player');
        $sql->execute([':player' => $_SESSION['user']]);
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

        $options = '<option value="0">- - - - -</option>';

        foreach ($rows as $row) {
            $options .= '<option value="' . (int)$row['id'] . '">' . $row['deck_name'] . '</option>';
        }

        return $options;
    }
}