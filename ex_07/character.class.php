<?php

class Character
{
    private $name;
    private $strength;
    private $magic;
    private $intelligence;
    private $life;

    public function __construct($name = null, $strength = 0, $magic = 0, $intelligence = 0, $life = 100)
    {
        static $i = 1;
        if ($name === null) {
            $this->name = "Character " . $i;
        } else {
            $this->name = $name;
        }
        $this->strength = $strength;
        $this->magic = $magic;
        $this->intelligence = $intelligence;
        $this->life = $life;
        echo 'New player "' . $this->name . '".' . "\n";
        $i++;
    }
    protected function getName()
    {
        return $this->name;
    }
    protected function getStrength()
    {
        return $this->strength;
    }
    protected function getMagic()
    {
        return $this->magic;
    }
    protected function getIntelligence()
    {
        return $this->intelligence;
    }
    protected function getLife()
    {
        return $this->life;
    }
    protected function setLife($life)
    {
        $this->life = $life;
    }
    public function attack($ennemi)
    {
        $ennemiLife = $ennemi->getLife() - $this->getStrength();
        $ennemi->setLife($ennemiLife);
        echo '"' . $this->name . '" hits "' . $ennemi->getName() . '"' . "\n";
        echo '"' . $ennemi->getName() . '" loses ' . $this->getStrength() . "HP!\n";
    }
    public function __toString()
    {
        return "My name is " . $this->name . ".\n";
    }
}

// require_once('game.class.php');
// $game = new Game();
// $game->addPlayer(new Character());
// echo $game->player(0);
// $game->addPlayer(new Character());
// $game->player(0)->attack($game->player(1));
// $game->addPlayer(new Character("Julien"));
// $game->player(2)->attack($game->player(0));
