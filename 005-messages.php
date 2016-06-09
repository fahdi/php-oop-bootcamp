<?php

class Person
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);

    }
}

class Staff
{
    protected $members = [];

    public function __construct($members)
    {
        $this->members = $members;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function add(Person $person)
    {
        $this->members = $person;
    }
}

$fahad = new Person("Fahad Murtaza");
$staff = new Staff();
$universal_coders = new Business($staff);

$universal_coders->hire($fahad);

var_dump($staff);

