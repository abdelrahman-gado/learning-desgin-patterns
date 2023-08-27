<?php

declare(strict_types=1);

namespace Creational\Prototype\Solution;

require_once "BasicCarCache.php";

class Client
{
    public static function main()
    {
        $carCache = new BasicCarCache();
        $carCache->loadCars();

        $nanoCar = $carCache->getClonedCar("Nano");
        echo "Car is: {$nanoCar->getName()} and it's price {$nanoCar->getPrice()}" . PHP_EOL;

        $fordCar = $carCache->getClonedCar("Ford");
        echo "Car is: {$fordCar->getName()} and it's price {$fordCar->getPrice()}" . PHP_EOL;
    }
}

Client::main();