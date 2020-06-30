<?php

namespace Race\Game;

class VehicleFactory 
{
    const CAR = 'car';
    const MOTORBIKE = 'motorbike';
    const TRUCK = 'truck';
    // metoda faktoryzująca, musi generowac konkretny typ obiektu.  

    public static function factory(string $type, string $name) : Vehicle 
    {
        $vehicle = null;
        switch ($type){
            case self::CAR:
                $vehicle = new Car($name);
                break;
            case self::MOTORBIKE:
                $vehicle = new Motorbike($name);
                break;
            case self::TRUCK:
                $vehicle = new Truck($name);
                break;
            default:
                throw new \Exception('Could not recognise type');            
        }       
        return $vehicle;
    }
}