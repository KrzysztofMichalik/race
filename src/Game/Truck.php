<?php

namespace Race\Game;

class Truck extends Abstractvehicle
{
    protected $type = "Truck";
    protected function getName() : string
    {
        return strtolower($this->name);
    }
    
}