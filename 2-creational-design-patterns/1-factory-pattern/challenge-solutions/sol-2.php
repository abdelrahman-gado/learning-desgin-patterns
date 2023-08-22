<?php

declare(strict_types=1);

namespace Creational\Factory\Solution2;


interface AnimalInterface
{
    public function say(string $quote): void;
}


class Tiger implements AnimalInterface
{
    public function say(string $quote): void
    {
        echo "Tiger says: " . $quote . PHP_EOL;
    }
}

class Duck implements AnimalInterface
{
    public function say(string $quote): void
    {
        echo "Duck says: " . $quote . PHP_EOL;
    }
}


abstract class AnimalFactory
{
    abstract protected function getAnimalType(string $type): AnimalInterface;
}

class ConcreteFactory extends AnimalFactory
{
    public function getAnimalType(string $type): AnimalInterface
    {
        $animal = match ($type) {
            "DUCK" => new Duck(),
            "TIGER" => new Tiger(),
            default => throw new \Exception("Animal type: " . $type . " cannot be instantiated")
        };

        return $animal;
    }
}


// Client Code

class Client
{
    public function main()
    {
        $factory = new ConcreteFactory();
        $duckType = $factory->getAnimalType("DUCK");
        $duckType->say("Duck Duck");


        $tigerType = $factory->getAnimalType("TIGER");
        $tigerType->say("Tiger Tiger");


        // Exception
        $lionType = $factory->getAnimalType("LION");
        $lionType->say("Lion");
    }
}

(new Client())->main();
