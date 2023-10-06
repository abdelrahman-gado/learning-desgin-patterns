<?php

declare(strict_types=1);

namespace Composite\Solution;

require_once "Faculty.php";


class Client
{

    public static function main(): void
    {
        $dean = new Supervisor('Dr. S.Som', 'Technology');
        
        $mathChair = new Supervisor('Mrs.S.Das', 'Math');
        $csChair = new Supervisor('Mr. V.Sarcar', 'CS');

        $professor1 = new Professor('Math professor1', 'Adjunct', 1);
        $professor2 = new Professor('Math professor2', 'Associate', 2);

        $mathChair->addFaculty($professor1);
        $mathChair->addFaculty($professor2);
        
        $professor3 = new Professor('CSE Professor1', 'Adjunct', 1);
        $professor4 = new Professor('CSE Professor2', 'Professor', 2);
        $professor5 = new Professor('CSE Professor3', 'Professor', 3);

        $csChair->addFaculty($professor3);
        $csChair->addFaculty($professor4);
        $csChair->addFaculty($professor5);

        $dean->addFaculty($mathChair);
        $dean->addFaculty($csChair);

        echo $dean->getDetails();

        $dean->removeFaculty($csChair);

        echo "--------------------" . PHP_EOL;

        echo $dean->getDetails();
    }
}

Client::main();