<?php

declare(strict_types=1);

namespace Creational\Builder\Solution;

require_once "Director.php";
require_once "MealBuilder.php";
require_once "Meal.php";

class Client
{
    public static function main()
    {
        $vegMealBuilder = new VegMealBuilder();
        $vegMeal = (new Director())->build($vegMealBuilder);

        echo "Veg Meal" . PHP_EOL;
        $vegMeal->showItems();
        echo "Total Cost: " . $vegMeal->getCost() . PHP_EOL;

        echo PHP_EOL;

        $nonVegMealBuilder = new NonVegMealBuilder();
        $nonVegMeal = (new Director())->build($nonVegMealBuilder);

        echo "Veg Meal" . PHP_EOL;
        $nonVegMeal->showItems();
        echo "Total Cost: " . $nonVegMeal->getCost() . PHP_EOL;
    }
}

Client::main();