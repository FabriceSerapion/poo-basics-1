<?php

require_once 'src/Vehicle.php';

class Truck extends Vehicle
{
  private string $energy;
  public const ALLOWED_ENERGIES = [
    'gasoline',
    'fuel',
    'electric'
  ];
  private int $energyLevel;

  private int $storage = 0;
  private int $storageCapacity;

  public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
  {
    parent::__construct($color, $nbSeats);
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
      $this->energy = $energy;
    };

    $this->storageCapacity = $storageCapacity;

    return $this;
  }

  public function setStorage(int $thingsToStore)
  {
    if ($this->storage + $thingsToStore < $this->storageCapacity) {
      $this->storage += $thingsToStore;
    } else if ($this->storage + $thingsToStore == $this->storageCapacity || $this->storage + $thingsToStore > $this->storageCapacity) {
      $this->storage = $this->storageCapacity;
    }
  }

  public function getStorage(): string
  {
    if ($this->storage < $this->storageCapacity) {
      return "in filling..." . $this->storage;
    } else {
      return "full" . $this->storage;
    }
  }

  public function getEnergy(): string
  {
    return $this->energy;
  }

  public function setEnergy(string $energy): Truck
  {
    if (in_array($energy, SELF::ALLOWED_ENERGIES)) {
      $this->energy = $energy;
    }
    return $this;
  }

  public function getEnergyLevel(): int
  {
    return $this->energyLevel;
  }

  public function setEnergyLevel(int $energyLevel): void
  {
    $this->energyLevel = $energyLevel;
  }
}
