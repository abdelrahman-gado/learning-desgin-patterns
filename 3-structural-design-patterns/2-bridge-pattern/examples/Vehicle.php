<?php

declare(strict_types=1);

namespace Bridge;

require_once "Workshop.php";

abstract class Vehicle
{
    protected Workshop $workshop1;
    protected Workshop $workshop2;

    protected function __construct(Workshop $workshop1, Workshop $workshop2)
    {
        $this->workshop1 = $workshop1;
        $this->workshop2 = $workshop2;
    }

    abstract public function manufacture(): void;
}

class Car extends Vehicle
{
    public function __construct(Workshop $w1, Workshop $w2)
    {
        parent::__construct($w1, $w2);
    }

    public function manufacture(): void
    {
        echo "Car " . PHP_EOL;
        $this->workshop1->work();
        $this->workshop2->work();
    }
}

class Bike extends Vehicle
{
    public function __construct(Workshop $w1, Workshop $w2)
    {
        parent::__construct($w1, $w2);
    }

    public function manufacture(): void
    {
        echo "Bike " . PHP_EOL;
        $this->workshop1->work();
        $this->workshop2->work();
    }
}