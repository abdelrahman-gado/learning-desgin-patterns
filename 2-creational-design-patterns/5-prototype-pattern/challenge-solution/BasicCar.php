<?php

declare(strict_types=1);

namespace Creational\Prototype\Solution;

abstract class BasicCar
{
    protected float $price = 20500;
    protected string $name;

    abstract protected function __clone();

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }

}