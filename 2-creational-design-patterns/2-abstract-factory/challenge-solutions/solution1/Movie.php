<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

require_once "IMovie.php";

class HollyWoodComedyMovie implements IHollyWoodMovie
{
    public function getMovieName(): string
    {
        return "HollyWoodComedyMovie";
    }
}

class HollyWoodActionMovie implements IHollyWoodMovie
{
    public function getMovieName(): string
    {
        return "HollyWoodActionMovie";
    }
}

class BollyWoodComedyMovie implements IBollyWoodMovie
{
    public function getMovieName(): string
    {
        return "BollyWoodComedyMovie";
    }
}

class BollyWoodActionMovie implements IBollyWoodMovie
{
    public function getMovieName(): string
    {
        return "BollyWoodActionMovie";
    }
}