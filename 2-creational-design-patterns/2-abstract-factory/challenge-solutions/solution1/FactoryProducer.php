<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

require_once "IMovieFactory.php";
require_once "Movie.php";
require_once "IMovie.php";

class FactoryProducer
{
    public static function getFactory(string $choice): IMovieFactory
    {
        $movieFactory = match ($choice) {
            "COMEDY" => new ComedyMovieFactory(),
            "ACTION" => new ActionMovieFactory()
        };

        return $movieFactory;
    }
}