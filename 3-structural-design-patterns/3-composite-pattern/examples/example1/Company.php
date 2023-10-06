<?php

declare(strict_types=1);

namespace Composite;

require_once "Employee.php";
require_once "Directory.php";

class Company
{
    public static function main(): void
    {
        $dev1 = new Developer(100, "Jason Fedin", "Pro Developer");
        $dev2 = new Developer(101, "Myra Fedin", "Entry Level Developer");

        $engDirectory = new Directory();
        $engDirectory->addEmployee($dev1);
        $engDirectory->addEmployee($dev2);

        $man1 = new Manager(200, "Jannifer Fedin", "SEO Manager");
        $man2 = new Manager(201, "Ian Fedin", "Myra's Manager");

        $accDirectory = new Directory();
        $accDirectory->addEmployee($man1);
        $accDirectory->addEmployee($man2);

        $companyDirectory = new Directory();
        $companyDirectory->addEmployee($engDirectory);
        $companyDirectory->addEmployee($accDirectory);

        $companyDirectory->showEmployeeDetails();
    }

}

Company::main();