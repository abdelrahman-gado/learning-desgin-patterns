<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

require_once "Shape.php";
require_once "Color.php";


// Note:: We are not follow the interface segregation principle here.
abstract class AbstractFactory
{
    abstract public function getShape(string $shape): ?Shape;
    abstract public function getColor(string $color): ?Color;
}


class ShapeFactory extends AbstractFactory
{
    public function getShape(string $shapeType): ?Shape
    {
        $shape = match ($shapeType) {
            "RECTANGLE" => new Rectangle(),
            "SQUARE" => new SQUARE(),
            "CIRCLE" => new Circle()
        };

        return $shape;
    }

    public function getColor(string $color): ?Color
    {
        return null;
    }
}

class ColorFactory extends AbstractFactory
{
    public function getColor(string $colorType): ?Color
    {
        $color = match ($colorType) {
            "RED" => new RED(),
            "GREEN" => new GREEN(),
            "BLUE" => new BLUE()
        };

        return $color;
    }

    public function getShape(string $shapeType): ?Shape
    {
        return null;
    }
}