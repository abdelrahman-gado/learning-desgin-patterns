<?php

declare(strict_types=1);

namespace Composite\Example2;

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
    private int $salary;

    /**
     * Summary of employeeList
     * @var Employee[]
     */
    private array $employeeList = [];

    public function __construct(string $name, int $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function addEmployee(Employee $emp)
    {
        $this->employeeList[] = $emp;
    }

    public function removeEmployee(Employee $emp)
    {
        foreach ($this->employeeList as $i => $employee) {
            if ($emp === $employee) {
                array_splice($this->employeeList, $i, 1);
            }
        }

        $this->employeeList = array_values($this->employeeList);
    }

    public function showEmployeeDetails(): void
    {
        echo "----------------------" . PHP_EOL;
        echo "Name = " . $this->name . PHP_EOL;
        echo "Salary = " . $this->salary . PHP_EOL;
        echo "---------------------" . PHP_EOL;

        foreach ($this->employeeList as $emp) {
            echo $emp->showEmployeeDetails();
        }
    }
}