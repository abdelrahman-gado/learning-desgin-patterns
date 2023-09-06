<?php

declare(strict_types=1);


interface IntegerValueInterface
{
    public function getInteger(): int;
}


class IntegerValue implements IntegerValueInterface
{
    public function getInteger(): int
    {
        return 5;
    }
}

class ClassAdapter extends IntegerValue
{
    public function getInteger()
    {
        return 2 + parent::getInteger();
    }
}

class ObjectAdapter
{
    private IntegerValueInterface $myInt;

    public function __construct(IntegerValueInterface $myInt)
    {
        $this->myInt = $myInt;
    }

    public function getInteger()
    {
        return 2 + $this->myInt->getInteger();
    }
}