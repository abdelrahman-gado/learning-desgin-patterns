<?php

declare(strict_types=1);

namespace Creational\Builder;

require_once "Director.php";
require_once "Builder.php";


class Client
{
    public function main()
    {
        $director = new Director();

        $carBuilder = new Car();
        $motorBuilder = new MotorCycle();

        $director->construct($carBuilder);
        $p1 = $carBuilder->getVehicle();
        $p1->show();

        echo PHP_EOL;

        $director->construct($motorBuilder);
        $p2 = $motorBuilder->getVehicle();
        $p2->show();

    }
}


(new Client())->main();