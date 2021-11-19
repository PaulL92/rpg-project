<?php

spl_autoload_register();

class Staff extends Weapon
{

    public function __construct($character)
    {
        if (get_class($character) == "Elf") {
            $character->attack += 2;
            $character->speed -= 2;
        }
        if (get_class($character) == "Human") {
            $character->attack += 2;
            $character->speed -= 2;
            $character->intelligence += 3;
        }

        if ($character->class == "Warrior") $character->attack -= 2;
        if ($character->class == "Hunter") {
            $character->attack -= 2;
            $character->speed -= 1;
            $character->defense += 2;
        }
        if ($character->class == "Mage") {
            $character->attack -= 3;
            $character->intelligence += 5;
            $character->defense += 2;
            $character->speed -= 1;
        }
    }
}
