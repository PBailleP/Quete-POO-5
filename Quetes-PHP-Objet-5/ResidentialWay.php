<?php 
require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Camion.php';
require_once 'SimpsonsCars.php';
require_once 'Skateboard.php';

final class ResidentialWay extends HighWay 
{
    private int $nbLane = 2;
    private int $maxSpeed = 50;
    private array $currentVehicles;

    public function addVehicle(Vehicle $vehicle): array
    {
        $this->currentVehicles[] = $vehicle;
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