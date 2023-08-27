<?php

declare(strict_types=1);

namespace Creational\Prototype\Solution;

require_once "BasicCar.php";

class Nano extends BasicCar
{
    protected string $name = "Nano";
    protected float $price = 30050;

    public function __clone()
    {

    }
}

class Ford extends BasicCar
{
    protected string $name = "Ford";
    protected float $price = 45300;

    public function __clone()
    {

    }
}