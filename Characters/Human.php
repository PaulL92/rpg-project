<?php

require_once "Adventurers.php";


class Human extends Adventurers
{

    protected $race = "Human";

    public function __construct($name, $warCry)
    {
        parent::__construct($name, $this->race, $warCry);
    }

    public function attack($opponent)
    {
        $hasWeapon = true;
        foreach ($this->equipment as $item) {
            if (!($item->type == "sword") || !($item->type == "staff"))
                $hasWeapon = false;
        }
        if ($hasWeapon) {
            $opponent->health -= $this->attack   - $opponent->defense;
        } else {
            $opponent->health -= $this->attack + 3 - $opponent->defense;
        }
    }

    public function usePower()
    {
        $this->health += 20;
    }
}
