<?php

namespace StudentManagement;

require_once 'Student.php';
require_once 'Course.php';

trait Loggable
{
    private function logFile($save)
    {
        $logFile = 'logFile.txt';
        $name = "Abdullah";
        file_put_contents($logFile, $save. "\n", FILE_APPEND);
    }
}

class Manager
{
    use Loggable;

    private $students = [];

    public function addStudent(Student $student)
    {
        $this->students[$student->getid()] = $student;
        $this->logFile($student->getname());
    }

    public function StudentId($id)
    {
        if (isset($this->students[$id])) {
            return $this->students[$id];
        }
    }

    public function updateStudent(Student $student)
    {
        $this->students[$student->getid()] = $student;
        $this->logFile('Updated student: ' . $student->getname());
    }

    public function deleteStudent(Student $student)
    {
        unset($this->students[$student->getid()]);
        $this->logFile('Deleted student: ' . $student->getname());
    }

}

$manager = new Manager();
$student1 = new Student(1, 'abdullah dawod', 'abd@gmail.com');
$student2 = new Student(2, 'ahmed masud', 'oamr@gmail.com');

$manager->addStudent($student1);
$manager->addStudent($student2);

// $student1->getName('saed');
$manager->updateStudent($student1);

$course1 = new Course(1, 'rami');
$course2 = new Course(2, 'mohammed');

$student1->addCourse($course1);
$student1->addCourse($course2);
$manager->updateStudent($student1);

$manager->deleteStudent($student2);

$retrievedStudent = $manager->StudentId(1);

echo 'ID: ' . $retrievedStudent->getId() . "\n";?> <br> <?php
echo 'Name: ' . $retrievedStudent->getName(). "\n";?> <br> <?php
echo 'Email: ' . $retrievedStudent->getEmail();