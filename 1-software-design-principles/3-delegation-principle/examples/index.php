<?php

// the delegate class
class RealPrinter
{
    public function print(): void
    {
        echo "The Delegate";
    }
}


// the delegator class
class Printer
{
    private RealPrinter $p;
    
    public function __construct()
    {
        $this->p = new RealPrinter();
    }

    // the method that delegate to RealPrinter
    public function print(): void
    {
        $this->p->print(); // delegation
    }
}


// To the outside world, it looks that the Printer who is responsible of printing
// but actually the responsible of printing is the RealPrinter
$printer = new Printer();
$printer->print();
