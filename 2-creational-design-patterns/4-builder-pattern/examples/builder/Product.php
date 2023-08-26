<?php

declare(strict_types=1);

namespace Creational\Builder;


class Product
{
    /**
     * Summary of parts
     * @var string[]
     */
    private array $parts;

    public function __construct()
    {
        $this->parts = [];
    }

    public function add(string $part): void
    {
        $this->parts[] = $part;
    }

    public function show(): void
    {
        echo "\nProduct completed as below" . PHP_EOL;
        print_r($this->parts);
    }
}