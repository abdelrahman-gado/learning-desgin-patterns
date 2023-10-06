<?php

declare(strict_types=1);

namespace Composite\Example2;

require_once "Employee.php";

class Company
{
    public static function main(): void
    {
        $dev1 = new Developer(100, "Jason Fedin", "Pro Developer");
        $dev2 = new Developer(101, "Myra Fedin", "Entry Level Developer");

        $engManager = new Manager("Mike", 25000);
        $engManager->addEmployee($dev1);
        $engManager->addEmployee($dev2);

        $dev3 = new Developer(102, "Tom", "Developer");

        $generalManager = new Manager("Mark", 50000);
        $generalManager->addEmployee($dev3);
        $generalManager->addEmployee($engManager);

        $generalManager->showEmployeeDetails();
    }

}

Company::main();