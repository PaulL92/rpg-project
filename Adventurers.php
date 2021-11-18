<?php

class Adventurers
{

    protected $race;
    protected $name;
    protected $health = 100;
    protected $attack = 10;
    protected $defense = 5;
    protected $speed = 5;
    protected $warCry;
    protected $equipment;

    //CONSTRUCTOR

    public function __construct($n, $r, $w)
    {
        $this->name = $n;
        if ($r == "Elf" || $r == "Human" || $r == "Orc")
            $this->race = $r;
        else echo "The race has to be Elf, Human or Orc.";
        if ($this->race == "Orc") $this->warCry = "wwouogrouroulou mlll !!";
        else $this->warCry = $w;
    }

    //SETTERS AND GETTERS

    public function set_equipment($equip)
    {
        if (!empty($this->equipment)) {
            $tmp = [];
            foreach ($this->equipment as $value) {
                $tmp[] = $value->get_type();
            }
            $tmpFinal = array_count_values($tmp);
        }

        if (empty($this->equipment)) {
            $this->equipment = [];
            $this->equipment[] = $equip;
        } elseif (count($tmpFinal) == 4) echo "You already are full equiped.";
        elseif (isset($tmpFinal["armor"]) && $equip->get_type() == "armor")
            echo "You can only have one armor";
        elseif (isset($tmpFinal["shield"]) && $equip->get_type() == "shield")
            echo "You can only have one shield";
        elseif (isset($tmpFinal["sword"]) && $equip->get_type() == "sword" && (isset($tmpFinal["shield"]) || $tmpFinal["sword"] == 2))
            echo "You only have two hands";
        else $this->equipment[] = $equip;

        $this->attack += $equip->get_atk();
        $this->defense += $equip->get_def();
        $this->health += $equip->get_hp();
    }

    public function unset_equipment($removeEquip)
    {
        foreach ($this->equipment as $key => $equip) {
            if ($equip->get_type() == $removeEquip) {
                $this->attack -= $this->equipment[$key]->get_atk();
                $this->defense -= $this->equipment[$key]->get_def();
                $this->health -= $this->equipment[$key]->get_hp();
                unset($this->equipment[$key]);
            }
        }
    }

    public function get_equipment($showEquip)
    {
        foreach ($this->equipment as $key => $equip) {
            if ($equip->get_type() == $showEquip) return $this->equipment[$key];
        }
    }

    public function get_race()
    {
        return $this->race;
    }

    public function get_warCry()
    {
        return "<b style='font-size: 30'>" . $this->warCry . "</b>";
    }


    public function get_name()
    {
        return $this->name;
    }

    public function get_health()
    {
        return $this->health;
    }

    public function get_attack()
    {
        return $this->attack;
    }

    public function get_defense()
    {
        return $this->defense;
    }
}
