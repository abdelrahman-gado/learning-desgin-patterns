<?php

declare(strict_types=1);

namespace Creational\AbstractFactory;

interface IBollyWoodMovie
{
    public function getMovieName(): string;
}

interface IHollyWoodMovie
{
    public function getMovieName(): string;
}