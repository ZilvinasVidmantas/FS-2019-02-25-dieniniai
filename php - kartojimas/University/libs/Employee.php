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

    public function toRow(...$args)
    {
        $rowData = [
            'position' => $this->position ?? '-nenustatyta-',
            'salary' => $this->salary ?? '-nenustatyta-'
        ];
        if(isset($args[0]) && gettype($args[0]) === 'array' ){
            $rowData = array_merge($rowData, $args[0]);
        }
        return parent::toRow($rowData);
    }
}
