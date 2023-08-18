<?php

declare(strict_types=1);


class Employee
{
    private string $employeeId;
    private string $name;
    private string $address;
    private DateTime $dateOfJoining;

}

// old code (Break Single Responsibility)

// class Employee
// {
//     private string $employeeId;
//     private string $name;
//     private string $address;
//     private DateTime $dateOfJoining;

//     public function isPromotionDueThisYear()
//     {
//         // promotion logic
//     }

//     public function calcIncomeTaxForCurrentYear()
//     {
//         // income tax logic
//     }
// }