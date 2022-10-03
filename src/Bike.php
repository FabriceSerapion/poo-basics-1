<?php

class Bike
{
  private int $nbWheels;
  public int $currentSpeed;
  private string $color;
  private int $nbSeats;

  public function __construct(string $color, int $nbSeats, int $nbWheels)
  {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->nbWheels = $nbWheels;
  }

  public function start(): string
  {
    $this->currentSpeed = 5;
    return "Let's go !";
  }

  public function forward(): string
  {
    $this->currentSpeed += 5;
    return 'I\'m moving';
  }
  public function brake(): string
  {
    $sentence = "";
    while ($this->currentSpeed > 0) {
      $this->currentSpeed--;
      $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped";
    return $sentence;
  }

  public function getNbWheels(): int
  {
    return $this->nbWheels;
  }
  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }
  public function getColor(): string
  {
    return $this->color;
  }
  public function getNbSeats(): int
  {
    return $this->nbSeats;
  }
}
