<?php

require_once 'src/Vehicle.php';

final class Car extends Vehicle
{
    private string $energy;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        if (in_array($energy, SELF::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
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
