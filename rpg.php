<?php

require_once "./Characters/Adventurers.php";
require_once "./Equipment/Equipment.php";
require_once "./Characters/Elf.php";
require_once "./Characters/Orc.php";
require_once "./Characters/Human.php";
require_once "./Equipment/gear.php";
require_once "./Equipment/Weapon.php";
require_once "./Equipment/weaponTypes/Axe.php";
require_once "./Equipment/weaponTypes/Bow.php";
require_once "./Equipment/weaponTypes/Dagger.php";
require_once "./Equipment/weaponTypes/Shield.php";
require_once "./Equipment/weaponTypes/Staff.php";
require_once "./Equipment/weaponTypes/Bow.php";
require_once "./battle/battle.php";

$char1 = new Human("Nomekron", "Attaaaaaaack!");
$char2 = new Elf("Ariana", "Die you fool");
$char3 = new Orc("Grom");

battle($char1, $char2);



/* ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header><?php require_once "navbar.php" ?></header>

</body>

</html> */