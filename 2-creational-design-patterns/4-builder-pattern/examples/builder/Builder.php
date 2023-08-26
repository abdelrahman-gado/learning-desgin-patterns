<?php

declare(strict_types=1);

namespace Creational\Builder;

require_once "Product.php";

interface BuilderInterface
{
    public function buildBody(): void;
    public function insertWheels(): void;
    public function addHeadlights(): void;
    public function getVehicle(): Product;
}

class Car implements BuilderInterface
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildBody(): void
    {
        $this->product->add("This is a body of a car");
    }
    public function insertWheels(): void
    {
        $this->product->add("4 wheels are added");
    }
    public function addHeadlights(): void
    {
        $this->product->add("2 headlights are added");
    }
    public function getVehicle(): Product
    {
        return $this->product;
    }
}

class MotorCycle implements BuilderInterface
{

    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildBody(): void
    {
        $this->product->add("This is a body of a Motorcycle");
    }
    public function insertWheels(): void
    {
        $this->product->add("2 wheels are added");
    }
    public function addHeadlights(): void
    {
        $this->product->add("1 headlights are added");
    }
    public function getVehicle(): Product
    {
        return $this->product;
    }
} 