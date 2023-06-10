<?php

namespace StudentManagement;

class Student {
    private readonly int $id;
    private $name;
    private $email;
    private $courses = [];

    public function __construct($id , $name , $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->courses = [];
    }

    public function getid()
    {
        return $this->id;
    }

    public function getname()
    {
        return $this->name;
    }

    public function getemail()
    {
        return $this->email;
    }
    
    public function addcourse(Course $course)
    {
        $this->courses[] = $course;
    }

    public function getcourse()
    {
        return $this->courses;
    }

}
