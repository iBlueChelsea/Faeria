<?php

chdir('..');
require_once "config/db.php";
$pdo = new DB();
$db = $pdo->connectToDB();

$sql = $db->prepare('UPDATE games SET react_state = :react_state WHERE id = :id');
$sql->execute([':id' => $_REQUEST['id'],':react_state' => $_REQUEST['react_state']]);