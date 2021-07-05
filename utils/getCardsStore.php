<?php

chdir('..');
require_once "config/db.php";
$pdo = new DB();
$db = $pdo->connectToDB();

$cards = [];

$sql = $db->prepare('SELECT * FROM cards');
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $card) {
    $cards[] = [
        "id" => (int)$card['id'],
        "type" => $card['type'],
        "faeria_cost" => (int)$card['faeria'],
        "land_cost" => [
            "forest" =>  (int)$card['forest'],
            "desert" =>  (int)$card['desert'],
            "mountain" =>  (int)$card['mountain'],
            "lake" =>  (int)$card['lake'],
            "wild" =>  (int)$card['wild'],
        ],
        "attack" => (int)$card['attack'],
        "base_attack" => (int)$card['attack'],
        "health" => (int)$card['health'],
        "base_health" => (int)$card['health'],
        "movement" => [
            "range" => (int)$card['movement_range'],
            "haste" => boolval($card['haste']),
            "dash" => (int)$card['dash'],
            "special" => [
                "aquatic" => boolval($card['aquatic']),
                "flying" => boolval($card['flying']),
                "jump" => boolval($card['jump']),
            ],
        ],
        "taunt" => boolval($card['taunt']),
        "divine" => boolval($card['divine']),
        "protection" => boolval($card['protection']),
        "ranged" => boolval($card['ranged']),
        "effects" => [
            "summon" => boolval($card['summon']),
            "gift" => boolval($card['gift']),
            "lastword" => boolval($card['lastword']),
            "production" => boolval($card['production']),
            "target" => boolval($card['target']),
        ],
        "legendary" => boolval($card['legendary']),
    ];
}

die(json_encode((object) $cards));