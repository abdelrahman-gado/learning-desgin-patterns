<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

interface Shape
{
    public function draw(): void;
}

class Rectangle implements Shape
{
    public function draw(): void
    {
        echo "Inside Rectangle::draw() method." . PHP_EOL;
    }
}

class Square implements Shape
{
    public function draw(): void
    {
        echo "Inside Square::draw() method." . PHP_EOL;
    }
}
class Circle implements Shape
{
    public function draw(): void
    {
        echo "Inside Circle::draw() method." . PHP_EOL;
    }
}