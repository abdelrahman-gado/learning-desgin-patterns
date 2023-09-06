<?php

declare(strict_types=1);

namespace Bridge\Solution;

require_once "Color.php";

abstract class Shape
{
    protected IColor $color;

    public function __construct(IColor $color)
    {
        $this->color = $color;
    }

    abstract protected function drawShapes(int $border);
    public function modifyBorder(int $border, int $increment)
    {
        $border = $border * $increment;
        $this->drawShapes($border);
    }
}

class Triangle extends Shape
{
    public function drawShapes(int $border)
    {
        $this->color->fillWithColor($border);
    }
}

class Rectangle extends Shape
{
    public function drawShapes(int $border)
    {
        $this->color->fillWithColor($border);
    }
}