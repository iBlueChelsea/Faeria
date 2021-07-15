<?php

chdir('..');
require_once "config/db.php";
$pdo = new DB();
$db = $pdo->connectToDB();

$nameFilter = $_REQUEST["name"];
$landFilter = $_REQUEST["land"];

$cards = [];

$query = 'SELECT * FROM cards WHERE playable=1';
if ($nameFilter) {
    $query .= " AND name LIKE '%{$nameFilter}%'";
}
if ($landFilter) {
    if ($landFilter === "neutral") {
        $query .= " AND forest=0 AND lake=0 AND mountain=0 AND desert=0";
    } else {
        $query .= " AND $landFilter > 0";
    }
}
$query .= " ORDER BY faeria, name";

$sql = $db->prepare($query);
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    $cards[] = $row;
}

die(json_encode($cards));
