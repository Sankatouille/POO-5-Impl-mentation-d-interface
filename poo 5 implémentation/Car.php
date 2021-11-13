<?php

require_once 'Vehicle.php';

class  Car extends Vehicle implements LightableInterface
{
    private bool $hasParkBrake = false;

    // INTERFACE
    public function switchOn(bool $true) :bool
    {
            return $true = true;
    }

    public function switchOff(bool $false) :bool
    {
        return $false = false;
    }

    public function setParkBrake()
    {
        if ($this->hasParkBrake == true)
        {
            $this->hasParkBrake = false;
            return $this->start();
        } elseif ($this->hasParkBrake == false)
        {
            $this->hasParkBrake = true;
            return 'Mise du frein à main.</br>';
        }
        return $this;
    }


    public function start(): string
    {
        if ($this->hasParkBrake == true)
        {
            throw new Exception("Impossible d'avancer. Retirer le frein à main.");
        } else {
            return "Moteur en marche, frein à main enlever, prêt à partir!";
        }
    }

    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake()
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    

    public function changeWheel()
    {
        return "change wheel of a car";
    }

}