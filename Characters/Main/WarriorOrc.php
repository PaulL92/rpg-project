<?php

namespace Characters\Main;

spl_autoload_register();

class WarriorOrc extends Orc
{
    public function __construct($name)
    {
        $this->health += 10;
        $this->attack += 4;
        $this->defense += 4;
        $this->speed -= 3;
        $this->intelligence -= 4;
        $warCry = "wwouogrouroulou mlll !!";
        parent::__construct($name, $warCry);
    }
}
