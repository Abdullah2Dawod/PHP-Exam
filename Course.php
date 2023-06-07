<?php
class Course {
    public readonly int $id;
    public $name;

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