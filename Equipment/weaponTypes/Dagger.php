<?php

spl_autoload_register();

class Dagger extends Weapon
{

    public function __construct($character)
    {
        if (get_class($character) == "Elf") {
            $character->attack -= 2;
            $character->speed += 5;
            $character->defense -= 2;
        }
        if (get_class($character) == "Orc") {
            $character->attack -= 2;
            $character->defense -= 3;
        }
        if (get_class($character) == "Human") {
            $character->attack += 2;
            $character->defense -= 1;
            $character->speed += 2;
        }
        if ($character->class == "Warrior") {
            $character->attack += 1;
            $character->speed += 2;
            $character->defense -= 2;
        }
        if ($character->class == "Hunter") {
            $character->attack += 2;
            $character->speed += 1;
            $character->defense -= 4;
        }
        if ($character->class == "Mage") {
            $character->attack += 2;
            $character->intelligence += 2;
            $character->defense -= 4;
            $character->speed += 1;
        }
    }
}
