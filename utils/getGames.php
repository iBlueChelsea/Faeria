<?php

chdir('..');
require_once "config/db.php";
$pdo = new DB();
$db = $pdo->connectToDB();

$games = [];

$sql = $db->prepare('SELECT * FROM games WHERE player2 IS NULL  LIMIT 10');
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    $games[] = $row;
}

die(json_encode($games));