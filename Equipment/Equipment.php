<?php

class Equipment
{
    private $name;
    private $type;
    private $atk;
    private $def;
    private $hp;
    private $speed;
    private $intelligence;

    public function __construct($n, $t, $a, $d, $s, $i, $h)
    {
        $this->name = $n;
        if ($t == "armor" || $t == "sword" || $t == "staff" || $t == "shield" || $t == "helmet" || $t == "gloves" || $t == "boots" || $t == "legs" || $t == "ring" || $t == "amulet")
            $this->type = $t;
        else echo "The type has to be one of the following items: armor, sword, shield, helmet, gloves, boots, legs, ring, amulet";
        $this->atk = $a;
        $this->def = $d;
        $this->hp = $h;
        $this->speed = $s;
        $this->intelligence = $i;
    }

    public function get_atk()
    {
        return $this->atk;
    }
    public function get_def()
    {
        return $this->def;
    }
    public function get_hp()
    {
        return $this->hp;
    }
    public function get_type()
    {
        return $this->type;
    }
    public function get_name()
    {
        return $this->name;
    }
}
