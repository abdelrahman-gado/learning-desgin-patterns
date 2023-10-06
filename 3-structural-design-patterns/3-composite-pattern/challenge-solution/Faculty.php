<?php

declare(strict_types=1);

namespace Composite\Solution;

// Component Interface
interface Faculty
{
    public function getDetails(): string;
}


// Leaf objects
class Professor implements Faculty
{
    public function __construct(private string $name, private string $position, private int $officeNumber)
    {
    }

    public function getDetails(): string
    {
        return "        " . $this->name . " " . $this->position . " " . $this->officeNumber . PHP_EOL;
    }
}

class Supervisor implements Faculty
{
    public function __construct(
        private string $name,
        private string $department,
        private array $facultyList = []
    ) {
    }

    public function addFaculty(Faculty $p)
    {
        $this->facultyList[] = $p;
    }

    public function removeFaculty(Faculty $p)
    {
        foreach ($this->facultyList as $i => $pro) {
            if ($pro === $p) {
                array_splice($this->facultyList, $i, 1);
            }
        }

        $this->facultyList = array_values($this->facultyList);
    }

    public function getDetails(): string
    {
        $facultyStr = '';
        $facultyStr .= "    " . $this->name . " is the Chair of " . $this->department . " Department" . PHP_EOL;

        foreach ($this->facultyList as $faculty) {
            $facultyStr .= $faculty->getDetails();
        }

        return $facultyStr;
    }
}