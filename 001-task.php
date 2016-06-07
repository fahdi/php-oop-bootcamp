<?php

class Task
{
    public $title;
    public $description;
    public $completed;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }

    public function completed()
    {
        $this->completed = true;
    }
}

$task = new Task("This is my first task", "In hwre I'd be refreshing my OOP knowledge and finish this example. ");
$task2 = new Task("This is my second task", "I'd work on more OOP examples and understand encapsultation better");

var_dump($task2->description);

$task2->completed();

var_dump($task);

var_dump($task2);

