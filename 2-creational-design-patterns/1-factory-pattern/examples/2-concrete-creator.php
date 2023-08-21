<?php

declare(strict_types=1);

namespace Creational\Factory\ConcreteCreator;


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


class ShapeFactory
{
    public function getShape(?string $shapeType): ?Shape
    {
        switch ($shapeType) {
            case "CIRCLE":
                return new Circle();
            case "RECTANGLE":
                return new Rectangle();
            case "SQUARE":
                return new Square();
            default:
                return null;
        }
    }
}


// Client code

$shapeFactory = new ShapeFactory();

$shape1 = $shapeFactory->getShape('CIRCLE');
$shape1->draw();

$shape2 = $shapeFactory->getShape('RECTANGLE');
$shape2->draw();

$shape3 = $shapeFactory->getShape('SQUARE');
$shape3->draw();