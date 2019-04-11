<?php
class Employee extends UniversityMember
{
    private $position;
    private $salary;
    public function __construct($personId, $name, $surname, $position, $salary)
    {
        $this->position = $position;
        $this->salary = $salary;
        parent::__construct($personId, $name, $surname);
    }
}
