<?php


// Bicycle.php

class Bicycle
{
    private $color;
    //get and set properties for $color
    /*public function getColor(): string
    {
      return $this->color;
    }*/
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    private $currentSpeed;

    //get and set properties for $currentSpeed
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }


    public $nbSeats = 1;

    public $nbWheels = 2;

    //constructor
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function dump()
    {
        var_dump($this);
    }
}





