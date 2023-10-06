<?php

declare(strict_types=1);

namespace Composite;

require_once "Employee.php";

// Composite 
class Directory implements Employee
{
    /**
     * employeeList
     * @var Employee[]
     */
    private array $employeeList = [];

    public function showEmployeeDetails(): void
    {
        foreach ($this->employeeList as $emp) {
            $emp->showEmployeeDetails();
        }
    }

    public function addEmployee(Employee $emp): void
    {
        $this->employeeList[] = $emp;
    }

    public function removeEmployee(Employee $emp): void
    {
        foreach ($this->employeeList as $i => $employee) {
            if ($employee === $emp) {
                array_splice($this->employeeList, $i, 1);
            }
        }

        $this->employeeList = array_values($this->employeeList);
    }
}