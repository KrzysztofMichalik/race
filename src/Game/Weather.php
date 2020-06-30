<?php
namespace Race\Game;

class Weather 
{
    private $current = self::SHINING;
    
    const RAINING = 'raining';
    const SHINING = 'shining';
    
    public function radomiseWeather() : void
    {
        $this->current = 0 === random_int(0, 2) ? self::RAINING : self::SHINING;
    }

    public function isRaining() : bool 
    {
        return $this->current === self::RAINING;
    }

    public function __toString() : string
    {
        return "Current weather {$this->current} \n";
    }
}