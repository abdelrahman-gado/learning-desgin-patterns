<?php

declare(strict_types=1);

interface Service
{
    public function write(string $message);
}


class ServiceA implements Service
{
    public function write(string $message)
    {
        echo $message . PHP_EOL;
    }
}

class Client
{
    private Service $myService;

    // inject via the constructor
    public function __constructor(Service $service)
    {
        $this->myService = $service;
    }

    // inject via a setter method
    public function setService(Service $service)
    {
        $this->myService = $service;
    }

    public function doSomething()
    {
        $this->myService->write("This is a message");
    }
}

$service = new ServiceA(); // the injected dependency
$client = new Client($service); // injects via the constructor
$client->setService($service); // injects via the setter method
$client->doSomething();