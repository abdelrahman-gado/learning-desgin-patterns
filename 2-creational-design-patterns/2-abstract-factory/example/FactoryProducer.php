<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

require_once "AbstractFactory.php";

class FactoryProducer
{
    public static function getFactory(string $choice): AbstractFactory
    {
        $factory = match ($choice) {
            "SHAPE" => new ShapeFactory(),
            "COLOR" => new ColorFactory(),
        };

        return $factory;
    }
}