<?php

declare(strict_types=1);

namespace Creational\Builder\Solution;

require_once "PackingInterface.php";


interface Item
{
    public function getName(): string;
    public function getPrice(): float;

    public function getPack(): Packing;
}