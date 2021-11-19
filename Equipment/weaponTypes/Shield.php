<?php

spl_autoload_register();

class Shield extends Weapon
{

    public function __construct($character)
    {
        if (get_class($character) == "Elf") {
            $character->attack -= 3;
            $character->speed -= 3;
            $character->defense += 2;
        }
        if (get_class($character) == "Orc") {
            $character->attack -= 2;
            $character->speed -= 1;
            $character->defense += 5;
        }
        if (get_class($character) == "Human") {
            $character->attack -= 2;
            $character->speed -= 2;
            $character->defense += 4;
        }
        if ($character->class == "Warrior") {
            $character->defense += 3;
        }
        if ($character->class == "Mage") {
            $character->attack -= 3;
            $character->intelligence -= 2;
            $character->defense += 5;
            $character->speed -= 1;
        }
    }
}
