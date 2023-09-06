<?php


declare(strict_types=1);


class Rectangle
{
    public float $length;
    public float $width;
}


class Triangle
{
    public float $base;
    public float $height;

    public function __construct(float $b, float $h) {
        $this->base = $b;
        $this->height = $h;
    }
}