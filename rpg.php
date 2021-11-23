<?php

namespace Characters\Main;

spl_autoload_register();


$nomekron = new WarlockOrc("Nomekron");
$alana = new HunterElf("Alana", "Die in silence");

echo "<pre>";
var_dump($nomekron);
echo "</pre>";
echo "<pre>";
var_dump($alana);
echo "</pre>";

battle($nomekron, $alana);
