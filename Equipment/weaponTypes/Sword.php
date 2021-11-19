<?php

spl_autoload_register();

class Sword extends Weapon
{

    public function __construct($character)
    {
        if (get_class($character) == "Elf") {
            if ($this->hands == 1) {
                $character->attack += 2;
                $character->speed += 3;
                $character->defense -= 4;
            } else {
                $character->attack += 3;
                $character->speed += 2;
                $character->defense -= 4;
            }
        }
        if (get_class($character) == "Orc") {
            if ($this->hands == 1) {
                $character->attack -= 3;
                $character->defense += 3;
            } else {
                $character->attack += 3;
                $character->defense -= 3;
            }
        }
        if ($character->class == "Warrior") {
            if ($this->hands == 1)
                $character->attack += 2;
            else $character->attack += 4;
        }
        if ($character->class == "Hunter") {
            $character->attack -= 2;
            $character->speed -= 1;
            $character->defense += 4;
        }
        if ($character->class == "Mage") {
            $character->attack -= 2;
            $character->intelligence -= 2;
            $character->defense += 2;
            $character->speed += 1;
        }
    }
}
