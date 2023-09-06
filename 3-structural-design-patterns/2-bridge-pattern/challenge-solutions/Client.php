<?php

declare(strict_types=1);

namespace Bridge\Solution;

require_once "Shape.php";
require_once "Color.php";

class Client
{
    public static function main()
    {
        $redColor = new RedColor();
        $shape1 = new Triangle($redColor);
        $shape1->drawShapes(20);
        $shape1->modifyBorder(20, 3);

        $greenColor = new GreenColor();
        $shape2 = new Rectangle($greenColor);
        $shape2->drawShapes(50);
        $shape2->modifyBorder(50, 2);
    }
}

Client::main();