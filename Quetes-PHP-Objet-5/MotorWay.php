<?php 
require_once 'HighWay.php';
require_once 'Car.php';
require_once 'Vehicles.php';

final class MotorWay extends HighWay 
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;
    private array $currentVehicles;

    public function addVehicle(Vehicle $vehicle): array
    {
        $this->currentVehicles = [];
        if ($vehicle instanceof SimpsonsCars) {
            $this->currentVehicles[] = $vehicle;
        }
        return $this->currentVehicles;
    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
}