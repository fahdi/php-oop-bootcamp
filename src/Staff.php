<?php

namespace UniversalCoders;

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
        $this->members[] = $person;
    }
}
