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
    public function __toString()
    {
        return "My name is " . $this->name . ".\n";
    }
}
