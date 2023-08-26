<?php

declare(strict_types=1);

namespace Creational\Builder\Solution;


class Meal
{
    private array $mealArray = [];

    public function addItem(string $key, object $value): void
    {
        $this->mealArray[$key] = $value;
    }

    public function getCost(): float
    {
        return array_reduce(
            $this->mealArray,
            fn($total, $item) => $total += $item->getPrice(),
            0.0
        );
    }

    public function showItems(): void
    {
        foreach ($this->mealArray as $item) {
            echo "Item: {$item->getName()}, Packing: {$item->getPack()->pack()}, Price: {$item->getPrice()}" . PHP_EOL;
        }
    }
}