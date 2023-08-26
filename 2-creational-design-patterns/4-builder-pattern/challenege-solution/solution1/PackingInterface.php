<?php

declare(strict_types=1);

namespace Creational\Builder\Solution;


interface Packing
{
    public function pack(): string;
}

class Wrapper implements Packing
{
    public function pack(): string
    {
        return "Wrapper";
    }
}

class Bottle implements Packing
{
    public function pack(): string
    {
        return "Bottle";
    }
}