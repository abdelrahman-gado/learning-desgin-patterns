<?php

declare(strict_types=1);

namespace Bridge\Solution;

abstract class IColor
{
    abstract protected function fillWithColor(int $border = 0): void;
}


class RedColor extends IColor
{
    public function fillWithColor(int $border = 0): void
    {
        echo "Fill the Shape with a Red Circle with borders {$border} px" . PHP_EOL;
    }
}


class GreenColor extends IColor
{
    public function fillWithColor(int $border = 0): void
    {
        echo "Fill the Shape with a Green Circle with borders {$border} px" . PHP_EOL;
    }
}