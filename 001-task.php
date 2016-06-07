<?php

class Task {
	public $description;
    public function __construct($description)
    {
        $this->description = $description;
    }
}

$task = new Task("This is my first task");

var_dump($task->description);