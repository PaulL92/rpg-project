<?php

namespace Characters\Main;

spl_autoload_register();

class BerserkOrc extends Orc
{
    public function __construct($name)
    {
        $this->health += 25;
        $this->attack += 8;
        $this->defense -= 8;
        $this->speed += 4;
        $this->intelligence -= 6;
        $warCry = "wwouogrouroulou mlll !!";
        parent::__construct($name, $warCry);
    }
}
