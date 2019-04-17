<?php

include 'libs/University.php';
include 'libs/UniversityMember.php';
include 'libs/Employee.php';
include 'libs/Student.php';
include 'libs/Lecturer.php';
include 'libs/Module.php';
include 'libs/Faculty.php';

$university = new University('Kauno universitetas');

$university->addFaculty('Fundamental stuff');
$university->addFaculty('Humanities stuff');

$university->addMember('Fundamental stuff', 0, 'Marytė', 'Marija', 'Administratorka', 800);
$university->addMember('Fundamental stuff', 5, 'Vycka', 'Vytėnas', 'Docent', 1000, 'Master');
$university->addMember('Fundamental stuff', 6, 'Staska', 'Stasėnas', 'Professor', 1100, 'PhD');
$university->addMember('Fundamental stuff', 11, 'Jonas', 'Jonaitis', 1,'Fundamental', 'Bachelor');
$university->addMember('Fundamental stuff', 12, 'Petras', 'Petraitis', 1,'Fundamental', 'Bachelor');
$university->addMember('Fundamental stuff', 13, 'Mindė', 'Mindaitis', 2,'Fundamental', 'Bachelor');
$university->addMember('Fundamental stuff', 14, 'Kazys', 'Kazaitis', 4,'Fundamental', 'Master');
$university->addMember('Fundamental stuff', 15, 'Antanas', 'Antanaitis', 3,'Fundamental', 'Master');
$university->addMember('Fundamental stuff', 16, 'Gedas', 'Gedaitis', 1,'Fundamental', 'Master');

$university->addMember('Fundamental stuff', 1, 'Onytė', 'Onaitė', 'Administratorka', 800);
$university->addMember('Humanities stuff', 7, 'Kostia', 'Kostėnas', 'Docent', 1000, 'Master');
$university->addMember('Humanities stuff', 8, 'Žora', 'Žorikas', 'Professor', 1100, 'PhD');
$university->addMember('Humanities stuff', 21, 'Rožė', 'Rožytė', 3, 'Humanities', 'Bachelor');
$university->addMember('Humanities stuff', 22, 'Tulpė', 'Tulpytė', 1, 'Humanities', 'Bachelor');
$university->addMember('Humanities stuff', 23, 'Eglė', 'Eglytė', 2, 'Humanities', 'Bachelor');
$university->addMember('Humanities stuff', 24, 'Ramunė', 'Ramunytė', 3, 'Humanities', 'Master');
$university->addMember('Humanities stuff', 25, 'Žibutė', 'Žibutytė', 2, 'Humanities', 'Master');
$university->addMember('Humanities stuff', 26, 'Pienė', 'Pienytė', 1, 'Humanities', 'Master');

$university->addMember(new Employee(2, 'Teisutis', 'Riomeris', 'Teisininkas', 1200));

echo $university->membersToTable();





