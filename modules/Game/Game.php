<?php

require_once "modules/Module.php";

class Game extends Module
{
    public function getContent()
    {
        $sql = $this->db->prepare('SELECT * FROM games WHERE id = :id');
        $sql->execute([':id' => $_REQUEST['id']]);
        $game = $sql->fetch(PDO::FETCH_ASSOC);

        if (!$game['player2'] && $game['player1'] != $_SESSION['user']) {
            $sql = $this->db->prepare('UPDATE games SET player2 = :user , react_state = :react_state WHERE id = :id');
            $sql->execute([':id' => $_REQUEST['id'], ':user' => $_SESSION['user'], ':react_state' => $this->updateReactState($game['react_state'])]);
        }

        $user = $_SESSION['user'] == $game['player1'] ? 'player1' : 'player2';
        $opponent = $_SESSION['user'] != $game['player1'] ? 'player1' : 'player2';

        $this->smarty->assign('user', $user);
        $this->smarty->assign('opponent', $opponent);
        $this->smarty->assign('game_id', $game['id']);
    }

    private function updateReactState($state)
    {
        $react_state = json_decode($state);
        $react_state->data->player2->name = $this->getUserName();
        $react_state->data->player2->cards = (object) $this->getCards();
        return json_encode($react_state);
    }

    private function getUserName()
    {
        $sql = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $sql->execute([':id' => $_SESSION['user']]);
        $user = $sql->fetch(PDO::FETCH_ASSOC);
        return $user['name'];
    }

    private function getCards()
    {
        $deck = $this->getDeck();
        $cards = [];
        $i = 0;
        foreach ($deck as $card) {
            $cards[0] = $this->getCard(0);
            $cards[++$i] = $this->getCard($card);
        }
        return $cards;
    }

    private function getDeck()
    {
        $sql = $this->db->prepare('SELECT * FROM decks WHERE id = :id');
        $sql->execute([':id' => $_SESSION['deck']]);
        $deck = $sql->fetch(PDO::FETCH_ASSOC);
        return json_decode($deck['cards']);
    }

    private function getCard($card_id)
    {
        $sql = $this->db->prepare('SELECT * FROM cards WHERE id = :id');
        $sql->execute([':id' => $card_id]);
        $card = $sql->fetch(PDO::FETCH_ASSOC);
        $result = [
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
        return $result;
    }
}
