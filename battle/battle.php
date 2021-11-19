<?php

require_once "../Characters/Adventurers.php";
require_once "../Characters/Elf.php";
require_once "../Characters/Orc.php";
require_once "../Characters/Human.php";
require_once "../Equipment/Equipment.php";
require_once "../Equipment/gear.php";
require_once "../Equipment/Weapon.php";
require_once "../Equipment/weaponTypes/Axe.php";
require_once "../Equipment/weaponTypes/Bow.php";
require_once "../Equipment/weaponTypes/Dagger.php";
require_once "../Equipment/weaponTypes/Shield.php";
require_once "../Equipment/weaponTypes/Staff.php";
require_once "../Equipment/weaponTypes/Bow.php";

function battle($attacker, $defender)
{

    if ($attacker->speed > $defender->speed) {
        $first = $attacker;
        $second = $defender;
    } else {
        $first = $defender;
        $second = $attacker;
    }

    while ($first->health > 0 && $second->health > 0) {
        $first->attack($second);
        echo "<br>";
        $second->attack($first);
        echo "<br>";
    }
}
