<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        if ($this->currentSpeed < 10) {
            return "Not enought speed";
        }
        return true;
    }
    public function switchOff()
    {
        return false;
    }
}
