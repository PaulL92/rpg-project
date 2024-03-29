<?php

namespace Characters\Main;

require_once "Adventurers.php";


class Orc extends Adventurers
{

    public function __construct($name)
    {
        $this->defense += 2;
        $this->health += 10;
        $this->attack += 2;
        $this->intelligence -= 4;
        $this->speed -= 2;
        $warCry = "wwouogrouroulou mlll !!";
        parent::__construct($name, $warCry);
    }

    public function attack($opponent)
    {
        $bonus = 0;
        if (get_class($opponent) == "Elf") {
            $hasShield = false;
            if (is_array($this->equipment))
                foreach ($opponent->equipment as $equip) {
                    if ($equip->type == "shield") $hasShield = true;
                }
            if (!$hasShield) $bonus = 50;
        }
        $normalAttack = rand($this->attack / 2, $this->attack + 10);
        $dmg = $normalAttack + $bonus - $opponent->defense;
        $opponent->health -= $dmg;
        if ($opponent->health > 0)
            echo $this->name . " caused an injury of " . $dmg . ". " . $opponent->name . " still has " . $opponent->health;
        else echo $this->name . " caused an injury of " . $dmg . ". " .  $opponent->name .   " is dead!";
    }

    public function usePower()
    {
        if (!$this->powerUsed) {
            $this->defense += 20;
            $this->attack -= 10;
            $this->powerUsed = true;
        }
    }
}
