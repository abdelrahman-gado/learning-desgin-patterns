<?php

declare(strict_types=1);

namespace Creational\Prototype\Solution;

require_once "BasicCar.php";
require_once "ConcreteCars.php";

class BasicCarCache
{
    private array $carCache = [];

    public function getClonedCar(string $name): BasicCar
    {
        $car = $this->carCache[$name];

        return clone $car;
    }

    public function loadCars()
    {
        $nanoCar = new Nano();
        $this->carCache[$nanoCar->getName()] = $nanoCar;

        $fordCar = new Ford();
        $this->carCache[$fordCar->getName()] = $fordCar;
    }
}