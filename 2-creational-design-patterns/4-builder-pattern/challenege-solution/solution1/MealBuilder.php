<?php

declare(strict_types=1);

namespace Creational\Builder\Solution;

require_once "Meal.php";
require_once "Burger.php";
require_once "ColdDrink.php";

interface IMealBuilder
{
    public function buildBurger(): void;
    public function buildDrink(): void;
    public function getMeal(): Meal;
}


class VegMealBuilder implements IMealBuilder
{
    private Meal $meal;

    public function __construct()
    {
        $this->meal = new Meal();
    }

    public function buildBurger(): void
    {
        $this->meal->addItem("burger1", new VegBurger());
    }

    public function buildDrink(): void
    {
        $this->meal->addItem("drink1", new Coke());
    }

    public function getMeal(): Meal
    {
        return $this->meal;
    }
}


class NonVegMealBuilder implements IMealBuilder
{
    private Meal $meal;

    public function __construct()
    {
        $this->meal = new Meal();
    }

    public function buildBurger(): void
    {
        $this->meal->addItem("burger1", new ChickenBurger());
    }

    public function buildDrink(): void
    {
        $this->meal->addItem("drink1", new Pepsi());
    }

    public function getMeal(): Meal
    {
        return $this->meal;
    }
}