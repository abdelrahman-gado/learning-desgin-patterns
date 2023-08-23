<?php

declare(strict_types=1);

namespace Creational\Singleton\Solution;


class SingletonCaptain
{
    private static ?SingletonCaptain $instance = null;

    public static function getInstance(): SingletonCaptain
    {
        if (static::$instance === null) {
            static::$instance = new SingletonCaptain();
        }

        return static::$instance;
    }

    private function __construct()
    {

    }
}

// Client code
echo "Trying to make a captain for our team" . PHP_EOL;
$c1 = SingletonCaptain::getInstance();
echo "New Captain selected for our team" . PHP_EOL;

echo "Trying to make a captain for our team" . PHP_EOL;
$c2 = SingletonCaptain::getInstance();


if ($c1 === $c2) {
    echo "You already have a captain for your team" . PHP_EOL;
    echo "c1 and c2 are same instance" . PHP_EOL;
}