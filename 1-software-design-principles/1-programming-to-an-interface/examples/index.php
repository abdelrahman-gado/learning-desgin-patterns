<?php

// interface
interface DisplayModule
{
    public function display(): void;
}

// concrete implementation
class Monitor implements DisplayModule
{
    public function display(): void
    {
        echo "Display through Monitor" . PHP_EOL;
    }
}

// concrete implementation
class Projector implements DisplayModule
{
    public function display(): void
    {
        echo "Display through Projector" . PHP_EOL;
    }
}



// client
class Computer
{
    // The client should not know about concrete implementations, we use the supertype (interface)
    private DisplayModule $dm;


    public function setDisplayModule(DisplayModule $dm)
    {
        $this->dm = $dm;
    }

    public function display()
    {
        $this->dm->display();
    }
}

$computer = new Computer();

$monitorDisplay = new Monitor();
$projectorDisplay = new Projector();

$computer->setDisplayModule($monitorDisplay);
$computer->display();

$computer->setDisplayModule($projectorDisplay);
$computer->display();