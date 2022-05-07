<?php 
require_once 'data/Student.php';

use data\Student\Student;

$student1 = new Student('Prasta',1,450);
echo Student::studDe('prasta','menyanyi','bermain');
var_dump($student1);

$studen2 = clone $student1;
var_dump($studen2);

?>