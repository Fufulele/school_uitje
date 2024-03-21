<?php

require_once 'SchoolTripList.php';

$schoolTripList = new SchoolTripList();
$schoolTripList->addStudent(new Student('Koningstein', '', '', ''));
$schoolTripList->addStudent(new Student('', 'rob', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'bert', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'johan', 'sod2b', 'nee'));
$schoolTripList->addStudent(new Student('', 'mees', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'fatima', 'sod2a', 'nee'));
$schoolTripList->addStudent(new Student('Brugge', '', '', ''));
$schoolTripList->addStudent(new Student('', 'yassir', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Mohammed', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'abdu', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'quin', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'enzo', 'sod2a', 'nee'));
$schoolTripList->addStudent(new Student('Drimmelen', '', '', ''));
$schoolTripList->addStudent(new Student('', 'monika', 'sod2b', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Pieter', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'akram', 'sod2a', 'nee'));
$schoolTripList->addStudent(new Student('', 'mehmet', 'sod2a', 'nee'));
$schoolTripList->addStudent(new Student('', 'yunus', 'sod2a', 'Ja'));



$schoolTripList->render();
