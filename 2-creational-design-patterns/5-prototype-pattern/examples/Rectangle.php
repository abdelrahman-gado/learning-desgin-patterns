<?php

declare(strict_types=1);

namespace Creational\Prototype;

require_once "Shape.php";

class Rectangle extends Shape
{
    public function __construct()
    {
        $this->type = "Rectangle";
    }

    public function draw(): void
    {
        echo "Inside Rectangle::draw() method" . PHP_EOL;
    }

    public function __clone()
    {

    }
}