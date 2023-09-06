<?php

declare(strict_types=1);

namespace Bridge;

abstract class Workshop
{
    abstract public function work(): void;
}

class Produce extends Workshop
{
    public function work(): void
    {
        echo "Produced" . PHP_EOL;
    }
}

class Assemble extends Workshop
{
    public function work(): void
    {
        echo "And Assembled" . PHP_EOL;
    }
}