<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class SimpsonsCars extends Vehicle implements LightableInterface {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy) {
        
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function start(): string
    {
        if ($this->hasParkBrake == true) {
            throw new Exception("You got your park brake");
        }
        $this->currentSpeed = 20;
        return "I'm started";
    }
    public function getEnergy(string $energy): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): SimpsonsCars
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

    /**
     * @param bool $hasParkBrake
     */
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
    public function switchOn()
    {
        return true;
    }
    public function switchOff()
    {
        return false;
    }
}
