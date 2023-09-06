<?php

declare(strict_types=1);

require_once "CalculatorInterface.php";
require_once "Shape.php";

class CalculatorAdapter implements CalculatorInterface
{
    public Calculator $calculator;
    public Triangle $t;

    public function __construct(Triangle $myTriangle)
    {
        $this->t = $myTriangle;
    }

    public function getArea(?Rectangle $r): float
    {
        $this->calculator = new Calculator();

        $rect = new Rectangle();
        $rect->length = $this->t->base;
        $rect->width = 0.5 * $this->t->height;

        return $this->calculator->getArea($rect);
    }
}