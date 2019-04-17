<?php
class University
{
    private $title;
    private $faculties;
    private $rector;
    private $members;

    public function __construct($title)
    {
        $this->title = $title;
        $this->faculties = [];
        $this->members = [];
    }

    public function addFaculty($title)
    {
        array_push($this->faculties, new Faculty($title));
    }

    public function toString()
    {
        $result = '<h3>' . $this->title . '</h3>';
        if (count($this->faculties) > 0) {
            $result .= "<ul>";
            foreach ($this->faculties as $faculty) {
                $result .= "
                    <li>
                        <span>" . $faculty->getTitle() . "</span>
                    </li>
                    ";
            }
            $result .= "</ul>";
        }
        return $result;
    }

    public function addMember()
    {
        $args = func_get_args();
        if (count($args) == 1 && is_subclass_of($args[0], 'UniversityMember')) {
            $member = $args[0];
        } elseif (count($args) > 1 && count($this->faculties) > 0) {
            $facultyFound = false;
            $facultyTitle = $args[0];
            foreach ($this->faculties as $faculty) {
                if ($facultyTitle == $faculty->getTitle()) {
                    $facultyFound = true;
                    $result = call_user_func_array([$faculty, 'addMember'], array_splice($args, 1));
                    break;
                }
            }
            if ($facultyFound && gettype($result) != 'string') {
                $member = $result;
                $member->setFaculty($facultyTitle);
            } else {
                echo $result ?? '<h3 style="color:red">Nėra toko fakulteto: ' . $facultyTitle . '</h3>';
                return false;
            }
        } else {
            echo '<h3 style="color:red">Blogi parametrai kuriant Universiteto narį</h3>';
            return false;
        }

        array_push($this->members, $member);
        return true;
    }

    public static function camelToString($camel)
    {
        $result = $camel[0];
        for ($i = 1; $i < strlen($camel); $i++) {
            if ($camel[$i] === ucfirst($camel[$i])) $result .= ' ';
            $result .= lcfirst($camel[$i]);
        }
        return ucfirst($result);
    }

    public function membersToTable()
    {
        $tableString = '<h3>There are no members in University</h3>';
        if (count($this->members) > 0) {
            $tableString = '
            <table border="1" width="100%">
                <thead>
                    <tr>';
            foreach (UniversityMember::$propertyNames as $key) $tableString .= '
                        <th>' . University::camelToString($key) . '</th>';
            $tableString .= '
                    </tr>
                </thead>
                <tbody>';
            foreach ($this->members as $member) $tableString .= $member->toRow();
            $tableString .= '
                </tbody>
            </table>';
        }
        return $tableString;
    }
}