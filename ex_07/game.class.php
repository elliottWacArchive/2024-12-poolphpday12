<?php

class Game
{
    private $length;
    private $players = [];

    public function addPlayer(object $player)
    {
        array_push($this->players, $player);
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
