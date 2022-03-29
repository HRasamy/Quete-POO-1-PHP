<?php

class Bicycle
{
    private int $nbWheels = 2;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats = 1;




    public function __construct(string $color, int $nbSeats, string $nbWheels)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {

        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        } else {
            $this->currentSpeed = 0;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbseats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }


    public function forward(): string
    {
        $this->currentSpeed = 20;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->getCurrentSpeed > 0) {
            $this->getCurrentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped ! ";
        return $sentence;
    }
}
