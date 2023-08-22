<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

require_once "FactoryProducer.php";

class Demo
{
    public function main() {
        $actionFactory = FactoryProducer::getFactory("ACTION");
        $comedyFactory = FactoryProducer::getFactory("COMEDY");

        $hollyActionMovie = $actionFactory->getHollyWoodMovie();
        echo $hollyActionMovie->getMovieName() . PHP_EOL;

        $bollyActionMovie = $actionFactory->getBollyWoodMovie();
        echo $bollyActionMovie->getMovieName() . PHP_EOL;

        $hollyComedyMovie = $comedyFactory->getHollyWoodMovie();
        echo $hollyComedyMovie->getMovieName() . PHP_EOL;

        $BollyComedyMovie = $comedyFactory->getBollyWoodMovie();
        echo $BollyComedyMovie->getMovieName() . PHP_EOL;
    }
}

(new Demo())->main();