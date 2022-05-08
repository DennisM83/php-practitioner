<?php

declare (strict_types = 1);

require 'functions.php';

class Task
{

    public $description;

    public $completed = false;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my course'),
    new Task('Clean my room'),
];

$tasks[0]->complete();

require 'index.view.php';
