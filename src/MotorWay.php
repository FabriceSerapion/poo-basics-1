<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
  public function addVehicle(Vehicle $vehicle)
  {
    if ($vehicle instanceof Car || $vehicle instanceof Truck) {
      $this->setCurrentVehicles($vehicle);
    } else {
      echo PHP_EOL . "<br/>" . "this kind of vehicle is not allowed on a motorway" . "<br/>" . PHP_EOL;
    }
    return $this;
  }
}
