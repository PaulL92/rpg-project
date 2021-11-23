<?php

namespace Characters\Main;

spl_autoload_register();

class MageHu extends Human
{
    public function __construct($name, $warCry)
    {
        $this->attack -= 1;
        $this->defense -= 2;
        $this->speed += 2;
        $this->intelligence += 6;
        parent::__construct($name, $warCry);
    }
}
