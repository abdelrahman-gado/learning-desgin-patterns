<?php

declare(strict_types=1);

interface Shape
{
    public function calculateArea(): float;
}

class Rectangle implements Shape
{
    public $height;
    public $width;

    public function calculateArea(): float
    {
        return $this->height * $this->width;
    }
}

class Circle implements Shape
{
    public $radius;

    public function calculateArea(): float
    {
        return pi() * $this->radius * $this->radius;
    }
}

class AreaCalculator
{
    public function calculateShapeArea(Shape $shape)
    {
        return $shape->calculateArea();
    }
}