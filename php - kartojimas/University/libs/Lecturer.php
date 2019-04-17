<?php
class Lecturer extends Employee
{
    private $degree;
    public function __construct($personId, $name, $surname, $position, $salary, $degree)
    {
        $this->degree = $degree;
        parent::__construct($personId, $name, $surname, $position, $salary);
    }

    public function toRow(...$args){
        return parent::toRow(['degree' => $this->degree ?? '-nenustatyta-']);
    }
}