<?php

abstract class Vehicle
{

  private static $vehicleCounter = 0;

  protected string $color;

  protected int $currentSpeed;

  protected int $nbSeats;

  protected int $nbWheels;

  public function __construct(string $color, int $nbSeats)
  {
    self::$vehicleCounter++;
    $this->color = $color;
    $this->nbSeats = $nbSeats;
  }

  public static function count(): int
   {
       return self::$vehicleCounter;
   }


  public function start(): string
  {
    $this->currentSpeed = 0;
    return "Let's go !";
  }

  public function forward(int $speed): string
  {
    $this->currentSpeed += $speed;
    return "Go !";
  }

  public function brake(): string
  {
    $sentence = "";
    while ($this->currentSpeed > 0) {
      $this->currentSpeed--;
      $sentence .= "Brake !!!";
    }

    $sentence .= "I'm stopped !";
    return $sentence;
  }

  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }

  public function setCurrentSpeed(int $currentSpeed): void
  {
    if ($currentSpeed >= 0) {
      $this->currentSpeed = $currentSpeed;
    }
  }

  public function getColor(): string
  {
    return $this->color;
  }

  public function setColor(string $color): void
  {
    $this->color = $color;
  }

  public function getNbSeats(): int
  {
    return $this->nbSeats;
  }

  public function setNbSeats(int $nbSeats): void
  {
    $this->nbSeats = $nbSeats;
  }

  public function getNbWheels(): int
  {
    return $this->nbWheels;
  }

  public function setNbWheels(int $nbWheels): void
  {
    $this->nbWheels = $nbWheels;
  }
}
