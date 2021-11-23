<?php

namespace Characters\Main;

spl_autoload_register();

function battle($attacker, $defender)
{

    if ($attacker->get_speed() > $defender->get_speed()) {
        $first = $attacker;
        $second = $defender;
    } else {
        $first = $defender;
        $second = $attacker;
    }

    while ($first->get_health() > 0 && $second->get_health() > 0) {
        $first->attack($second);
        echo "<br>";
        $second->attack($first);
        echo "<br>";
    }
}
