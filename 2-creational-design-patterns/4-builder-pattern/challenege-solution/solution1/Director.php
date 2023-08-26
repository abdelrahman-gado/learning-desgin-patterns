<?php

declare(strict_types=1);

namespace Creational\Builder\Solution;

require_once "MealBuilder.php";
require_once "Meal.php";

class Director
{
    public function build(IMealBuilder $builder): Meal
    {
        $builder->buildBurger();
        $builder->buildDrink();

        return $builder->getMeal();
    }
}