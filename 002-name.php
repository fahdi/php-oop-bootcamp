<?php

class Person
{
    public $name;
    private $age;

    public function __construct($name)
    {
        $this->name = $name;

    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("Person is not old enough");
        }
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$john = new Person("John Doe");
$john->setAge(19);

//$john->age = 15; #should not happen

var_dump($john);

var_dump( $john->getAge());