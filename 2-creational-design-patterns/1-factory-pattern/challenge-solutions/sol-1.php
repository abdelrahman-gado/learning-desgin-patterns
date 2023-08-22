<?php

declare(strict_types=1);

namespace Creational\Factory\Solution;

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


class AnimalFactory
{
    public static function getAnimal(string $animalType): AnimalInterface
    {
        $animal = match ($animalType) {
            'TIGER' => new Tiger(),
            'DUCK' => new Duck()
        };

        return $animal;
    }
}

// Client Code
class Client
{
    public function main()
    {
        $animal1 = AnimalFactory::getAnimal('DUCK');
        $animal1->say('Pack-pack');

        $animal2 = AnimalFactory::getAnimal('TIGER');
        $animal2->say('Halum..Halum');
    }
}


(new Client())->main();