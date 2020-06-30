<?php
namespace Race\Game;

/**
 *
 */
class Race
{
  private $distance = 0;
  private $maxTours = 5;
  private $weather; 
  private $vehicles = [];

  // wszystkie parametry, które mają stałą wartość powinny być podawane na końcu 

  public function __construct(Weather $weather, float $distance = 5)
  {
    $this->distance = $distance;
    $this->weather = $weather;
  }


  public function addVehicle(Vehicle $vehicle) : void{
    $this->vehicles[] = $vehicle;
  }

  public function getDistance() : float
  {
    return $this->distance;
  }

  public function run() :void
  {
    $this->displayInfo();
    foreach (range(1, $this->maxTours) as $tour) {
      $this->tour($tour);
    }
  }

  private function tour (int $tour)
  {
    $this->weather->radomiseWeather();
    $this->displayTourInfo($tour);
    foreach ($this->vehicles as $key => $vehicle) {
      $vehicle->move();
    }
  }

//  funkcja pomocnicza
  private function displayInfo() : void
  {
    echo "\n Distance: \t" . $this->getDistance();
    echo "\n Vehicles: \t" . count($this->vehicles);
  }

  private function displayTourInfo(int $tour){
    echo "\n Tour {$tour} began:";
    echo "\n {$this->weather}";
  }
}