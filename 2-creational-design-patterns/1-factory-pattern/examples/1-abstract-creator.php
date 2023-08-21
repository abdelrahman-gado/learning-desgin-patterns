<?php

declare(strict_types=1);

namespace Creational\Factory\AbstractCreator;

interface Shape
{
    public function draw();
}

class Rectangle implements Shape
{
    public function draw()
    {
        echo "Inside Rectangle::draw() method." . PHP_EOL;
    }
}

class Square implements Shape
{
    public function draw()
    {
        echo "Inside Square::draw() method." . PHP_EOL;
    }
}
class Circle implements Shape
{
    public function draw()
    {
        echo "Inside Circle::draw() method." . PHP_EOL;
    }
}




abstract class AbstractShapeFactory
{
    abstract protected function factoryMethod(): Shape;

    public function getShape(): Shape
    {
        return $this->factoryMethod();
    }
}




class RectangleFactory extends AbstractShapeFactory
{
    protected function factoryMethod(): Shape
    {
        return new Rectangle();
    }
}

class SquareFactory extends AbstractShapeFactory
{
    protected function factoryMethod(): Shape
    {
        return new Square();
    }
}

class CircleFactory extends AbstractShapeFactory
{
    protected function factoryMethod(): Shape
    {
        return new Circle();
    }
}


// client code

$shape1 = (new CircleFactory())->getShape();
$shape1->draw();

$shape2 = (new RectangleFactory())->getShape();
$shape2->draw();

$shape3 = (new SquareFactory())->getShape();
$shape3->draw();