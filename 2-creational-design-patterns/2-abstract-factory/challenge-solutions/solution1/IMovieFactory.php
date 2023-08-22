<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

require_once "IMovie.php";
require_once "Movie.php";

interface IMovieFactory
{
    public function getHollyWoodMovie(): IHollyWoodMovie;
    public function getBollyWoodMovie(): IBollyWoodMovie;
}


class ActionMovieFactory implements IMovieFactory
{
    public function getHollyWoodMovie(): IHollyWoodMovie
    {
        return new HollyWoodActionMovie();
    }

    public function getBollyWoodMovie(): IBollyWoodMovie
    {
        return new BollyWoodActionMovie();
    }
}


class ComedyMovieFactory implements IMovieFactory
{
    public function getHollyWoodMovie(): IHollyWoodMovie
    {
        return new HollyWoodComedyMovie();
    }

    public function getBollyWoodMovie(): IBollyWoodMovie
    {
        return new BollyWoodComedyMovie();
    }
}