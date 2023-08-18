<?php

declare(strict_types=1);

class Rectangle
{
    public $height;
    public $width;
}

class Circle
{
    public $radius;
}

class AreaCalculator
{
    public function calculateRectangleArea(Rectangle $rectangle): float
    {
        return $rectangle->height * $rectangle->width;
    }

    public function calculateCircleArea(Circle $circle): float
    {
        return pi() * $circle->radius * $circle->radius;
    }
}