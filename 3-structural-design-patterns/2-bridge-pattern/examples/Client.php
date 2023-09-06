<?php

declare(strict_types=1);

namespace Bridge;

require_once "Vehicle.php";
require_once "Workshop.php";

class Client
{
    public static function main()
    {
        $vehicle1 = new Car(new Produce(), new Assemble());
        $vehicle1->manufacture();

        $vehicle2 = new Bike(new Produce(), new Assemble());
        $vehicle2->manufacture();

    }
}

Client::main();