<?php

require_once('character.class.php');

class Game
{
    private $length;
    private $players = [];

    public function addPlayer(object $player)
    {
        array_push($this->players, $player);
        echo 'New player "' . $player->getPublicName() . '".' . "\n";
    }

    public function __construct()
    {
        echo "New game !\n";
    }

    public function player($index)
    {
        return $this->players[$index];
    }
}
