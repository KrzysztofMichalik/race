<?php

namespace Race\Game;

// od fabryki różni się brakiem metody statycznej generującej obiekt

class VehicleBuilder
{   
    private $name = '';
    private $type = '';

    const CAR = VehicleFactory::CAR;
    const MOTORBIKE = VehicleFactory::MOTORBIKE;
    const TRUCK = VehicleFactory::TRUCK;

    public function setType(string $type) : void 
    {
        $this->type = $type;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    // funkcja zwracajaca obiekt typu vehicle.
    public function build() : Vehicle 
    {
        $vehicle = null;
        switch ($this->type){
            case self::CAR:                
            case self::MOTORBIKE:              
            case self::TRUCK:
                $vehicle = VehicleFactory::factory($this->type, $this->name);  
                break;
            default:
                throw new \Exception('Could not recognise type');            
        }       
        return $vehicle;
    }
} 