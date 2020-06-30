<?php

namespace Race\Game;

class Motorbike extends Abstractvehicle
{
    protected $type = "Motorbike";
    protected function getName() : string
    {
        return strtoupper($this->name);
    }
 
}