<?php

class Weapon extends Equipment
{

    protected $type;
    protected $hands;

    public function __construct($t, $h)
    {
        if ($t == "sword" || $t == "staff" || $t == "axe" || $t == "bow" || $t == "dagger" || $t == "shield") $this->type = $t;
        if ($h == 1 || $h == 2) $this->hands = $h;
    }
}
