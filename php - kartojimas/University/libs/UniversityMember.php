<?php
abstract class UniversityMember
{
    private $personId;
    private $name;
    private $surname;
    private $modules;
    private $faculty;
    private $isAcademic;
    protected function __construct($personId, $name, $surname)
    {
        $this->personId = $personId;
        $this->name = $name;
        $this->surname = $surname;
        $this->modules = [];
        $this->faculty = [];
        $this->isAcademic = true;
    }
}
