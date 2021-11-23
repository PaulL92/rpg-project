<?php

namespace Characters\Main;

spl_autoload_register();

class HunterElf extends Elf
{
    public function __construct($name, $warCry)
    {
        $this->health += 5;
        $this->attack += 2;
        $this->defense -= 4;
        $this->speed += 4;
        parent::__construct($name, $warCry);
    }
}
