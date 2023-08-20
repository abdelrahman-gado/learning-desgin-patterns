<?php

declare(strict_types=1);

// This interface violates the interface segregation principle, 
// because we may have clients like square and rectangle which are a fat shapes and
// will be forced to implement the volume() and they doesn't use it
// So, the solution is to segregate that interface into two interfaces

// interface ShapeInterface
// {
//     public function area(): float;
//     public function volume(): float;
// }


interface ShapeInterface
{
    public function area(): float;
}


interface SolidShapeInterface
{
    public function volume(): float;
}

interface ManageShapeInterface
{
    public function calculate(): float;
}

class Cube implements ShapeInterface, SolidShapeInterface, ManageShapeInterface
{
    public function area(): float
    {
        return 1.0;
    }
    public function volume(): float
    {
        return 1.0;
    }

    public function calculate(): float
    {
        return $this->area() + $this->volume();
    }
}


class Square implements ShapeInterface, ManageShapeInterface
{
    public function area(): float
    {
        return 1.0;
    }

    public function calculate(): float
    {
        return $this->area();
    }
}