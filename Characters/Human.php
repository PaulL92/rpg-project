<?php

require_once "Adventurers.php";


class Human extends Adventurers
{

    public function __construct($name, $warCry)
    {
        $this->health += 15;
        $this->intelligence += 2;
        parent::__construct($name, $warCry);
    }

    public function attack($opponent)
    {
        $bonus = 0;
        if (is_array($this->equipment)) {
            foreach ($this->equipment as $item) {
                if (!($item->type == "sword") || !($item->type == "staff"))
                    $bonus = 3;
            }
        }


        $opponent->health -= $this->attack + $bonus - $opponent->defense;

        if ($opponent->health > 0)
            echo $this->name . " caused an injury of " . ($this->attack + $bonus  - $opponent->defense) . ". " . $opponent->name . " still has " . $opponent->health;
        else echo  $this->name . " caused an injury of " . ($this->attack + $bonus - $opponent->defense) . ". " .  $opponent->name .   " is dead!";
    }

    public function usePower()
    {
        if (!$this->powerUsed) {
            $this->health += 20;
            $this->powerUsed = true;
        }
    }
}
