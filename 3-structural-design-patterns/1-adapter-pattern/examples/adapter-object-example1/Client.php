<?php

declare(strict_types=1);

require_once "Turkey.php";
require_once "Duck.php";
require_once "TurkeyAdapter.php";

class Client
{
    public static function main()
    {
        $duck = new MallardDuck();
        $turkey = new WildTurkey();

        $turkeyAdapter = new TurkeyAdapter($turkey);

        self::testDuck($turkeyAdapter);
    }

    public static function testDuck(Duck $duck): void
    {
        $duck->quack();
        $duck->fly();
    }
}


Client::main();