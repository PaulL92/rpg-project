<?php

namespace Characters\Main;

require_once "Adventurers.php";




class Elf extends Adventurers
{

    public function __construct($name, $warCry)
    {
        $this->speed += 3;
        $this->intelligence += 2;
        $this->defense -= 4;
        parent::__construct($name, $warCry);
    }

    public function attack($opponent)
    {
        $bonus = 0;
        if (is_array($this->equipment))
            foreach ($this->equipment as $equip) {
                if ($equip->type == "sword") $bonus += 2;
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
            $this->speed += 3;
            $this->powerUsed = true;
        }
    }
}
