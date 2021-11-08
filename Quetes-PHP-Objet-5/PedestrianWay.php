<?php 
require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Bike.php';
require_once 'Skateboard.php';

final class PedestrianWay extends HighWay 
{
    private int $nbLane = 1;
    private int $maxSpeed = 10;
    private array $currentVehicles;

    public function addVehicle(Vehicle $vehicle): array
    {
        $this->currentVehicles = [];
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
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