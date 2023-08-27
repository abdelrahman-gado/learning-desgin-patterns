<?php

declare(strict_types=1);

namespace Creational\Prototype;

require_once "Shape.php";
require_once "Circle.php";
require_once "Square.php";
require_once "Rectangle.php";

class ShapeCache
{
    private static array $shapeMap = [];

    public static function getShape(string $shapeId): Shape
    {
        $cachedShape = static::$shapeMap[$shapeId];
        return clone $cachedShape;
    }

    public static function loadCache(): void
    {
        $circle = new Circle();
        $circle->setId("1");
        static::$shapeMap[$circle->getId()] = $circle;

        $square = new Square();
        $square->setId("2");
        static::$shapeMap[$square->getId()] = $square;

        $rectangle = new Rectangle();
        $rectangle->setId("3");
        static::$shapeMap[$rectangle->getId()] = $rectangle;
    }
}