<?php

declare(strict_types=1);

namespace Creational\Builder;

require_once "Builder.php";


class Director
{
    private BuilderInterface $myBuilder;

    public function construct(BuilderInterface $builder) {
        $this->myBuilder = $builder;
        $this->myBuilder->buildBody();
        $this->myBuilder->insertWheels();
        $this->myBuilder->addHeadlights();
    }
}