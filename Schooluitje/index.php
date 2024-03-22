<?php
//auteur: Rauf
require_once 'SchoolTripList.php';

$schoolTripList = new SchoolTripList();
$schoolTripList->addStudent(new Student('', 'azad', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'yasir', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'akram', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('Brugge', '', '', 'ja'));
$schoolTripList->addStudent(new Student('', 'amine', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'mo', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Rauf', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'AYoub', 'sod2b', 'Nee'));
$schoolTripList->addStudent(new Student('', 'ali', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Pablo', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Berky', 'sod2b', 'Nee'));
$schoolTripList->addStudent(new Student('', 'ashafar', 'sod2a', 'Ja'));



$schoolTripList->render();
