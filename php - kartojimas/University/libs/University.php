<?php
class University
{
    private $title;
    private $faculties;
    private $rector;
    private $members;
    private $faculty;

    public function __construct($title)
    {
        $this->title = $title;
        $this->faculties = [];
        $this->rector = [];
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
            } else {
                echo $result ?? '<h3 style="color:red">Nėra toko fakulteto: ' . $facultyTitle . '<h3>';
                return false;
            }
        } else {
            echo '<h3 style="color:red">Blogi parametrai kuriant Universiteto narį<h3>';
            return false;
        }

        array_push($this->members, $member);
        return true;
    }

}