<?php
class Course {
    private readonly int $id;
    private $name;

    public function __construct($id , $name) {
        $this->id = $id;
        $this->name = $name;

    }

    public function getid()
    {
        return $this->id;
    }

    public function getname()
    {
        return $this->name;
    }
}