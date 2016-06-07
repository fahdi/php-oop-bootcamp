<?php

class Task {
	public $description;
    public function __construct($description)
    {
        $this->description = $description;
    }
}

$task = new Task("This is my first task");
$task2 = new Task("This is my second task");

var_dump($task2->description);