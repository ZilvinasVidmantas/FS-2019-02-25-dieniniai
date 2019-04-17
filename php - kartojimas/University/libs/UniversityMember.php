<?php
abstract class UniversityMember
{
    private $personId;
    private $name;
    private $surname;
    private $modules;
    private $faculty;
    private $isAcademic;
    static $propertyNames = [
        'personId',
        'name',
        'surname',
        'faculty',
        'modules',
        'isAcademic',
        'studyField',
        'potencialDegree',
        'course',
        'degree',
        'position',
        'salary'
    ];

    protected function __construct($personId, $name, $surname)
    {
        $this->personId = $personId;
        $this->name = $name;
        $this->surname = $surname;
        $this->modules = [];
        // $this->isAcademic = true;
    }


    public function setFaculty($faculty){
        $this->faculty = $faculty;
    }

    public function toRow(...$args)
    {
        $rowData = [
            'personId' => $this->personId ?? '-nenustatyta-',
            'name' => $this->name ?? '-nenustatyta-',
            'surname' => $this->surname ?? '-nenustatyta-',
            'faculty' => $this->faculty ?? '-nenustatyta-',
            'modules' => (count($this->modules) > 0) ? implode(', ', $this->modules) : '-nenustatyta-', // !!!!!
            'isAcademic' => $this->isAcademic ?? '-nenustatyta-',
            'studyField' => '-nenustatyta-',
            'potencialDegree' => '-nenustatyta-',
            'course' => '-nenustatyta-',
            'degree' => '-nenustatyta-',
            'position' => '-nenustatyta-',
            'salary' => '-nenustatyta-'
        ];

        // Papildymas
        if (isset($args[0]) && gettype($args[0]) === 'array') {
            foreach ($args[0] as $key => $value) {
                if (array_key_exists($key, $rowData)) $rowData[$key] = $value;
            }
        }

        $row = '<tr>';
        foreach ($rowData as $value) $row .= '<td>' . $value . '</td>';
        $row .= '</tr>';
        return $row;
    }
}
