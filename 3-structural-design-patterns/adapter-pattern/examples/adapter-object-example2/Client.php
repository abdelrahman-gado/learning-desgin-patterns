<?php

declare(strict_types=1);

require_once "Shape.php";
require_once "CalculatorInterface.php";
require_once "CalculatorAdapter.php";

class Client
{
    public static function main()
    {
        echo "Adapter Pattern Demo" . PHP_EOL;

        $triangle = new Triangle(20.1, 10);
        $calculatorAdapter = new CalculatorAdapter($triangle);
        echo $calculatorAdapter->getArea(null);
    }
}

Client::main();