<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10){
            return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}