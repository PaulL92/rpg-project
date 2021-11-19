<?php

require_once "../Equipment.php";
require_once "../Weapon.php";

class Bow extends Weapon
{

    public function __construct($character)
    {
        if (get_class($character) == "Elf") {
            $character->attack += 3;
            $character->speed += 3;
            $character->defense -= 6;
        }
        if (get_class($character) == "Orc") {
            $character->defense -= 3;
        }
        if (get_class($character) == "Human") {
            $character->defense -= 1;
            $character->attack += 1;
            $character->speed += 2;
        }
        if ($character->class == "Warrior") $character->attack -= 2;
        if ($character->class == "Hunter") {
            $character->attack += 4;
            $character->speed += 2;
            $character->defense -= 6;
        }
        if ($character->class == "Mage") {
            $character->intelligence -= 2;
        }
    }
}
