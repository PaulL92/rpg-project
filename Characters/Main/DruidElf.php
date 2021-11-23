<?php

namespace Characters\Main;

spl_autoload_register();

class DruidElf extends Elf
{
    public function __construct($name, $warCry)
    {
        $this->attack -= 1;
        $this->defense -= 3;
        $this->speed += 3;
        $this->intelligence += 6;
        parent::__construct($name, $warCry);
    }
}
