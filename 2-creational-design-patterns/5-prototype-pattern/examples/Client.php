<?php

declare(strict_types=1);

namespace Creational\Prototype;

require_once "ShapeCache.php";
require_once "Shape.php";

class Client
{

    public static function main()
    {
        ShapeCache::loadCache();

        $clonedShape = ShapeCache::getShape("1");
        echo "Shape " . $clonedShape->getType() . PHP_EOL;

        $clonedShape2 = ShapeCache::getShape("2");
        echo "Shape " . $clonedShape2->getType() . PHP_EOL;

        $clonedShape3 = ShapeCache::getShape("3");
        echo "Shape " . $clonedShape3->getType() . PHP_EOL;
    }
}


Client::main();