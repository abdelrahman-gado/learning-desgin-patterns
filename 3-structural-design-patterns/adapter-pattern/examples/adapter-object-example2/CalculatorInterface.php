<?php

declare(strict_types=1);

require_once "Shape.php";

interface CalculatorInterface
{
    // target interface
    public function getArea(Rectangle $r): float;
}

class Calculator implements CalculatorInterface
{
    public Rectangle $rect;

    public function getArea(Rectangle $r): float
    {
        $this->rect = $r;
        return $this->rect->length * $this->rect->width;
    }
}