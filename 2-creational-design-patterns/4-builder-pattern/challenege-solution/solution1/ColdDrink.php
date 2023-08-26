<?php

declare(strict_types=1);

namespace Creational\Builder\Solution;

require_once "PackingInterface.php";
require_once "ItemInterface.php";

abstract class ColdDrink implements item
{
    abstract public function getPrice(): float;

    abstract public function getName(): string;

    public function getPack(): Packing
    {
        return new Bottle();
    }
}


class Coke extends ColdDrink
{
    public function getPrice(): float
    {
        return 1.50;
    }

    public function getName(): string
    {
        return "Coke";
    }
}

class Pepsi extends ColdDrink
{
    public function getPrice(): float
    {
        return 1.99;
    }

    public function getName(): string
    {
        return "Pepsi";
    }
}