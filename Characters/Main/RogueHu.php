<?php

namespace Characters\Main;

spl_autoload_register();

class RogueHu extends Human
{
    public function __construct($name, $warCry)
    {
        $this->health += 5;
        $this->attack += 2;
        $this->defense -= 2;
        $this->speed += 3;
        $this->intelligence -= 1;
        parent::__construct($name, $warCry);
    }
}
