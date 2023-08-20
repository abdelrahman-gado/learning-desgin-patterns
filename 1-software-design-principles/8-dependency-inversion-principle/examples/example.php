<?php

declare(strict_types=1);

// This code violates the DIP, because PasswordReminder (high level module) depend on
// concrete class (low level module) which is MySQLConnection not in abstraction.
// 
// class PasswordReminder
// {
//     private int $dbConnection;

//     public function __construct(MySQLConnection $dbConnection)
//     {
//         $this->dbConnection = $dbConnection;
//     }
// }


// Solution:

// Abstraction
interface DBConnectionInterface
{
    public function connect(): int;
}


// Low level module --> implements the abstraction (depend on abstraction)
class MySQLConnection implements DBConnectionInterface
{
    public function connect(): int
    {
        return 1;
    }
}

// high level module --> accept the abstraction (depend on abstraction not low level (concrete))
class PasswordReminder
{
    private DBConnectionInterface $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}

// We can change MySQLConnection to something like PostgresConnection else without affecting PasswordReminder.