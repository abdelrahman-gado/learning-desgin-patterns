<?php

declare(strict_types=1);

interface Duck
{
    public function quack(): void;
    public function fly(): void;
}


class MallardDuck implements Duck
{
    public function quack(): void
    {
        echo "Quack" . PHP_EOL;
    }

    public function fly(): void
    {
        echo "I am flying" . PHP_EOL;
    }
}