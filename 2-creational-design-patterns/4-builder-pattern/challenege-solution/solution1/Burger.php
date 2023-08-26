<?php

declare(strict_types=1);

namespace Creational\Builder\Solution;

require_once "PackingInterface.php";
require_once "ItemInterface.php";

abstract class Burger implements Item
{

    abstract public function getPrice(): float;

    abstract public function getName(): string;

    public function getPack(): Packing
    {
        return new Wrapper();
    }
}


class VegBurger extends Burger
{
    public function getPrice(): float
    {
        return 3.50;
    }

    public function getName(): string
    {
        return "Veg Burger";
    }
}


class ChickenBurger extends Burger
{
    public function getPrice(): float
    {
        return 5.50;
    }

    public function getName(): string
    {
        return "Chicken Burger";
    }
}