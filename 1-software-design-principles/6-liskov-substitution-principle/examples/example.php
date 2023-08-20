<?php

declare(strict_types=1);


abstract class Vehicle
{
    abstract public function getSpeed(): int;
    abstract public function getCubicCapacity(): int;
}


class Car extends Vehicle
{
    public function getSpeed(): int
    {
        return 0;
    }
    public function getCubicCapacity(): int
    {
        return 0;
    }

    public function isHatchBag(): bool
    {
        return false;
    }
}


class Bus extends Vehicle
{
    public function getSpeed(): int
    {
        return 0;
    }
    public function getCubicCapacity(): int
    {
        return 0;
    }

    public function getEmergencyExitLoc(): string
    {
        return "";
    }
}

// After we follow LSP, we can do
function runVehicle(Vehicle $vehicle)
{
    $vehicle->getSpeed();
    $vehicle->getCubicCapacity();
}

runVehicle(new Bus());
runVehicle(new Car());