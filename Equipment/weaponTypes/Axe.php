<?php

spl_autoload_register();

class Axe extends Weapon
{

    public function __construct($character)
    {
        if (get_class($character) == "Elf") {
            if ($this->hands == 2) {
                $character->attack += 2;
                $character->speed -= 4;
                $character->defense -= 2;
            } else {
                $character->attack += 1;
                $character->speed -= 2;
                $character->defense -= 1;
            }
        }
        if (get_class($character)  == "Orc") {
            if ($this->hands == 2) {
                $character->attack += 4;
                $character->defense -= 4;
                $character->speed += 2;
            } else {
                $character->attack += 3;
                $character->defense -= 3;
                $character->speed += 1;
            }
        }
        if (get_class($character)  == "Human") {
            if ($this->hands == 2) {
                $character->attack += 3;
                $character->defense -= 2;
            } else {
                $character->attack += 1;
                $character->defense -= 1;
            }
        }
        if ($character->class == "Warrior") {
            if ($this->hands == 2) {
                $character->attack += 5;
                $character->speed -= 2;
                $character->defense -= 3;
            } else {
                $character->attack += 3;
                $character->defense -= 2;
            }
        }
        if ($character->class == "Hunter") {
            if ($this->hands == 2) {
                $character->attack += 2;
                $character->speed -= 4;
            } else {
                $character->attack += 1;
                $character->speed -= 3;
            }
        }
        if ($character->class == "Mage") {
            //if clause for mage equipment -> cannot wear a 2h axe
            $character->attack -= 2;
            $character->intelligence -= 3;
            $character->defense -= 2;
            $character->speed -= 1;
        }
    }
}
