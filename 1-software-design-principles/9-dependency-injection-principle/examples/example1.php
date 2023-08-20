<?php

declare(strict_types=1);

// This code demonstrate What is a hard dependency.

class Client
{
    private ExampleService $service;

    public function __construct()
    {
        // specify a specific implementation in the constructor instead of dependency injection
        $this->service = new ExampleService();
    }

    public function greet()
    {
        return "Hello " . $this->service->getName();
    }
}