<?php

chdir('..');
require_once "config/db.php";
$pdo = new DB();
$db = $pdo->connectToDB();

$decks = [];

$sql = $db->prepare('SELECT * FROM decks WHERE player = :player');
$sql->execute([':player' => $_REQUEST['user']]);
$rows = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    $row['cards'] = json_decode($row['cards']);
    $decks[] = $row;
}

die(json_encode($decks));