<?php

require_once "../Equipment.php";
require_once "../Weapon.php";

class Axe extends Weapon
{

    public function __construct($adventurer)
    {
        if ($adventurer->race == "Elf") {
            $adventurer->attack += 3;
            $adventurer->speed -= 4;
            $adventurer->defense -= 2;
        }
        if ($adventurer->race == "Orc") {
            $adventurer->attack += 4;
            $adventurer->defense -= 4;
            $adventurer->speed += 2;
        }
        if ($adventurer->class == "Warrior") $adventurer->attack += 2;
        if ($adventurer->class == "Hunter") {
            $adventurer->attack += 3;
            $adventurer->speed -= 3;
        }
        if ($adventurer->class == "Mage") {
            $adventurer->attack -= 2;
            $adventurer->intelligence -= 3;
            $adventurer->defense -= 2;
            $adventurer->speed -= 1;
        }
    }
}
