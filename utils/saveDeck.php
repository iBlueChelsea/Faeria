<?php

chdir('..');
require_once "config/db.php";
$pdo = new DB();
$db = $pdo->connectToDB();

$deck = json_decode($_REQUEST['deck']);

$sql = $db->prepare('SELECT * FROM decks WHERE id = :id');
$sql->execute([':id' => $deck->id]);
$row = $sql->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $sql = $db->prepare('UPDATE decks SET deck_name = :deck_name, cover = :cover, cards = :cards, cost = :cost WHERE id = :id');
    $sql->execute([':id' => $deck->id, ':deck_name' => $deck->deck_name, ':cover' => $deck->cover, ':cards' => json_encode($deck->cards), ':cost' => $deck->cost]);
} else {
    $sql = $db->prepare('INSERT INTO decks (player, deck_name, cover, cards, cost) VALUES (:player, :deck_name, :cover, :cards, :cost)');
    $sql->execute([':player' => $_REQUEST['user'], ':deck_name' => $deck->deck_name, ':cover' => $deck->cover, ':cards' => json_encode($deck->cards), ':cost' => $deck->cost]);
}