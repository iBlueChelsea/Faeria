<?php

chdir('..');
require_once "config/db.php";
$pdo = new DB();
$db = $pdo->connectToDB();

$sql = $db->prepare('SELECT react_state FROM games WHERE id=:id');
$sql->execute([':id' => $_REQUEST['id']]);
$state = $sql->fetch(PDO::FETCH_ASSOC);

die(json_encode($state['react_state']));