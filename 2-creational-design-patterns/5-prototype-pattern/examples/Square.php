<?php

declare(strict_types=1);

namespace Creational\Prototype;

require_once "Shape.php";

class Square extends Shape
{
    public function __construct()
    {
        $this->type = "Square";
    }

    public function draw(): void
    {
        echo "Inside Square::draw() method" . PHP_EOL;
    }

    public function __clone()
    {

    }
}