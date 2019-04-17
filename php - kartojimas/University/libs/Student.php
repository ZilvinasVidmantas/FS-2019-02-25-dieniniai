<?php
class Student extends UniversityMember
{
    private $studyField;
    private $potencialDegree;
    private $course;
    
    public function __construct($personId, $name, $surname, $course, $studyField, $potencialDegree)
    {
        $this->studyField = $studyField;
        $this->potencialDegree = $potencialDegree;
        $this->course = $course;
        parent::__construct($personId, $name, $surname);
    }

    public function toRow(...$args)
    {
        return parent::toRow([
            'potencialDegree' => $this->potencialDegree ?? '-nenustatyta-',
            'studyFields' => $this->studyFields ?? '-nenustatyta-',
            'course' => $this->course ?? '-nenustatyta-'
        ]);
    }
}