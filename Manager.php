<?php

require_once 'Student.php';
require_once 'Course.php';

trait Loggable
{
    private function logFile($save)
    {
        $logFile = 'logFile.txt';
        $name = "Abdullah";
        file_put_contents($logFile, $save);
    }
}

class Manager
{
    use Loggable;

    public $students = [];

    public function AddStudent(Student $student)
    {
        $this->students[$student->getid()] = $student;
        $this->logFile($student->getname());
    }

    public function StudentId($id)
    {
        if (isset($this->students[$id])) {
            return $this->students[$id];
        }
        return null;
    }

}

$manager = new Manager();
$student1 = new Student(1, 'abdullah', 'abd@gmail.com');

$manager->AddStudent($student1);

$retrievedStudent = $manager->StudentId(1);

echo 'ID: ' . $retrievedStudent->getid(); ?> <br> <?php
echo 'Name: ' . $retrievedStudent->getname(); ?> <br> <?php
echo 'Email: ' . $retrievedStudent->getemail();