<?php

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

    public function getCourse(Course $course)
    {
        $this->courses[] = $course;
    }

}
