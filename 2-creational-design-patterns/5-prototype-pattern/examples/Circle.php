<?php

declare(strict_types=1);

namespace Creational\Prototype;

require_once "Shape.php";

class Circle extends Shape
{
    public function __construct()
    {
        $this->type = "Circle";
    }

    public function draw(): void
    {
        echo "Inside Circle::draw() method" . PHP_EOL;
    }

    public function __clone()
    {

    }
}