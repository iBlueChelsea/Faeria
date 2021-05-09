<?php

chdir('..');
require_once "config/db.php";
$pdo = new DB();
$db = $pdo->connectToDB();

$cards = [];

$sql = $db->prepare('SELECT * FROM cards WHERE playable=1');
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    $cards[] = $row;
}

die(json_encode($cards));