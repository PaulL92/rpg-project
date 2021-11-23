<?php

namespace Characters\Main;

spl_autoload_register();

class WarriorElf extends Elf
{
    public function __construct($name, $warCry)
    {
        $this->health += 10;
        $this->attack += 3;
        $this->defense += 1;
        $this->speed -= 1;
        $this->intelligence -= 2;
        parent::__construct($name, $warCry);
    }
}
