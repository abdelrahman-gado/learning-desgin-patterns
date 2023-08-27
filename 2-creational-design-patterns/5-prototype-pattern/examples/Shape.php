<?php

declare(strict_types=1);

namespace Creational\Prototype;

abstract class Shape
{
    private string $id;
    protected string $type;

    abstract public function __clone();

    abstract public function draw(): void;

    public function getType(): string
    {
        return $this->type;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }
}

