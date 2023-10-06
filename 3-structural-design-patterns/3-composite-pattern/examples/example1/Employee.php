<?php

declare(strict_types=1);

namespace Composite;

interface Employee
{
    public function showEmployeeDetails(): void;
}

class Developer implements Employee
{
    private string $name;
    private int $empId;
    private string $position;

    public function __construct(int $empId, string $name, string $position)
    {
        $this->empId = $empId;
        $this->name = $name;
        $this->position = $position;
    }

    public function showEmployeeDetails(): void
    {
        echo $this->empId . " " . $this->name . " " . $this->position . PHP_EOL;
    }
}


class Manager implements Employee
{
    private string $name;
    private int $empId;
    private string $position;

    public function __construct(int $empId, string $name, string $position)
    {
        $this->name = $name;
        $this->empId = $empId;
        $this->position = $position;
    }

    public function showEmployeeDetails(): void
    {
        echo $this->empId . " " . $this->name . " " . $this->position . PHP_EOL;
    }
}