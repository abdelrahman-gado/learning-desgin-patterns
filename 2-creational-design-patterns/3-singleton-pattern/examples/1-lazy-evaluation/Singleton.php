<?php

declare(strict_types=1);

namespace Creational\Singleton\Lazy;

class Singleton
{
    // the private reference to the one and only instance
    private static ?Singleton $uniqueInstance = null;

    // an instance property
    private int $data = 0;


    private function __construct()
    {
    }

    public static function getInstance(): Singleton
    {
        if (self::$uniqueInstance === null) {
            self::$uniqueInstance = new Singleton();
        }

        return self::$uniqueInstance;
    }

    // add a set data here

    public function setData(int $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}