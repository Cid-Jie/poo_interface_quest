<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    private string $energy;
    private int $energyLevel;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function start():string
    {
        if($this-> energyLevel > 10){
            return 'You can go !';
        }else{
            return 'Refuel after go!';
        }
        
    }

    //Constructor
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    
    //Get functions for each private attribute
    public function getEnergy():string
    {
        return $this->energy;
    }

    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }

    //Set function for each private attribute
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        } 
        return $this;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}