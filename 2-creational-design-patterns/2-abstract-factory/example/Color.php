<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

interface Color
{
    public function fill(): void;
}

class Green implements Color
{
    public function fill(): void
    {
        echo "Inside Green::fill() method" . PHP_EOL;
    }
}

class Red implements Color
{
    public function fill(): void
    {
        echo "Inside Red::fill() method" . PHP_EOL;
    }
}

class Blue implements Color
{
    public function fill(): void
    {
        echo "Inside Blue::fill() method" . PHP_EOL;
    }
}