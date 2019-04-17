<?php
class Faculty
{
    private $title;
    private $possibleStudyFields;
    private $members;
    public function __construct($title)
    {
        $this->title = $title;
        $this->possibleStudyFields = [];
        $this->members = [];
    }

    public function getTitle()
    {
        return $this->title;
    }

    private function createEmployee($args)
    {
        return new Employee($args[0], $args[1], $args[2], $args[3], $args[4]);
    }
    private function createLecturer($args)
    {
        return new Lecturer($args[0], $args[1], $args[2], $args[3], $args[4], $args[5]);
    }
    private function createStudent($personId, $name, $surname, $course, $studyField, $potencialDegree)
    {
        return new Student($personId, $name, $surname, $course, $studyField, $potencialDegree);
    }
    public function addMember()
    {
        $args = func_get_args();
        if (count($args) == 5) $member = $this->createEmployee($args);
        elseif (count($args) == 6) {
            if (is_numeric($args[4])) $member = $this->createLecturer($args);
            else $member = call_user_func_array([$this, 'createStudent'], $args);
        } else {
            return '<h3 style="color:red">Blogi parametrai kuriant Fakulteto narį</h3>';
        }
        array_push($this->members, $member);
        return $member;
    }


    public function membersToTable()
    {
        $tableString = '<h3>There are no members in faculty' . $this->title . '</h3>';
        if (count($this->members) > 0) {
            $keys = array_keys($this->members[0]);
            $tableString = '
            <table border="1" width="100%">
                <thead>
                    <tr>';
            foreach ($keys as $key) $tableString .= '
                        <th>' . University::camelToString($key) . '</th>';
            $tableString .= '
                    </tr>
                </thead>
                <tbody>';
            foreach ($this->members as $member) {
                $tableString .=
                    '<tr>';
                foreach ($member as $data)
                    $tableString .=
                        "<td>$data</td>";
                $tableString .=
                    '<tr>';
            }
            $tableString .= '
                </tbody>
            </table>';
        }
        return $tableString;
    }
}