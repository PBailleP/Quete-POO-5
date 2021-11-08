<?php

require_once 'Vehicle.php';

class Camion extends Vehicle {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;
    private int $capacity;
    private int $charge = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity) { 
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }

    public function getEnergy(string $energy): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Camion
    {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
    }
    public function getEnergyLevel(int $energyLevel): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getCharge(int $charge): int
    {
        return $this->charge;
    }
    public function setCharge(int $charge): void
    {
        $this->charge = $charge;
    }
    public function getCapacity(int $capacity): int
    {
        return $this->capacity;
    }
    public function setCapacity(int $capacity): void
    {
        $this->charge = $capacity;
    }
    public function filling()
    {
        $charging = "";
        while ($this->charge <= $this->capacity) {
            $this->charge ++;
            $charging .="In charging";
        }
            $charging .="full";
            return $charging;
        
    }
}
