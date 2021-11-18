<?php

require_once "../Equipment.php";
require_once "../Weapon.php";

class Sword extends Weapon
{

    public function __construct($adventurer)
    {
        if ($adventurer->race == "Elf") {
            $adventurer->attack += 2;
            $adventurer->speed += 3;
            $adventurer->defense -= 4;
        }
        if ($adventurer->race == "Orc") {
            $adventurer->attack -= 3;
            $adventurer->defense += 3;
        }
        if ($adventurer->class == "Warrior") $adventurer->attack += 2;
        if ($adventurer->class == "Hunter") {
            $adventurer->attack -= 2;
            $adventurer->speed -= 1;
            $adventurer->defense += 4;
        }
        if ($adventurer->class == "Mage") {
            $adventurer->attack -= 2;
            $adventurer->intelligence -= 2;
            $adventurer->defense += 2;
            $adventurer->speed += 1;
        }
    }
}
