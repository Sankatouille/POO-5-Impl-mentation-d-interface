<?php

require_once 'Vehicle.php';

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn(bool $true) :bool
    {
        if($this->currentSpeed >= 10) {
            return $true = true;
        }
    }

    public function switchOff(bool $false) :bool
    {
        return $false = false;
    }

    public function changeWheel()
    {
        return "change wheel of a bike";
    }

}