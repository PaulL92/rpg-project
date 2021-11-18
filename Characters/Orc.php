<?php

require_once "Adventurers.php";


class Orc extends Adventurers
{

    protected $race = "Orc";

    public function __construct($name, $warCry)
    {
        parent::__construct($name, $this->race, $warCry);
    }

    public function attack($opponent)
    {
        if ($opponent->race == "Elf") {
            $hasShield = false;
            foreach ($opponent->equipment as $equip) {
                if ($equip->type == "shield") $hasShield = true;
            }
            if (!$hasShield) $opponent->health -= 50;
            else $opponent->health -= $this->attack - $opponent->defense;
        }
    }

    public function usePower()
    {
        $this->defense += 20;
        $this->attack -= 10;
    }
}
