<?php

namespace Race\Game;

class Car extends Abstractvehicle
{
    protected $type = "Car";
    protected function getName() : string
    {
        return strtoupper($this->name);
    }
}
