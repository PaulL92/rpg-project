<?php

namespace Characters\Main;

spl_autoload_register();

class WarlockOrc extends Orc
{
    public function __construct($name)
    {
        $this->health += 10;
        $this->attack -= 2;
        $this->defense -= 2;
        $this->intelligence += 7;
        $warCry = "wwouogrouroulou mlll !!";
        parent::__construct($name, $warCry);
    }
}
