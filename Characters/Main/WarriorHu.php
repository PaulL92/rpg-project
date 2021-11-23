<?php

namespace Characters\Main;

spl_autoload_register();

class WarriorHu extends Human
{
    public function __construct($name, $warCry)
    {
        $this->health += 15;
        $this->attack += 2;
        $this->defense += 2;
        $this->speed -= 2;
        $this->intelligence -= 2;
        parent::__construct($name, $warCry);
    }
}
