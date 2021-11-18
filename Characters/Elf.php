<?php

require_once "Adventurers.php";
require_once "Equipment.php";

class Elf extends Adventurers
{

    protected $race = "Elf";

    public function __construct($name, $warCry)
    {
        parent::__construct($name, $this->race, $warCry);
    }

    public function attack($opponent)
    {
        $bonus = 0;
        foreach ($this->equipment as $equip) {
            if ($equip->type == "sword") $bonus += 2;
        }
        $opponent->health -= $this->attack + $bonus - $opponent->defense;
    }

    public function usePower()
    {
        $this->speed += 3;
    }
}
