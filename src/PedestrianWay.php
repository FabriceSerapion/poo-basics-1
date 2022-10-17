<?php

require_once 'HighWay.php';
require_once 'Bike.php';

final class PedestrianWay extends HighWay
{

  public function addVehicle(Vehicle $vehicle)
  {
    if ($vehicle instanceof Bike) {
      $this->setCurrentVehicles($vehicle);
    } else {
      echo PHP_EOL . "<br/>" . 'this kind of vehicle is not allowed on a pedestrian way' . "<br/>" . PHP_EOL;
    }
    return $this;
  }
}
