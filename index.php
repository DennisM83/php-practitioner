<?php

class Task
{

    protected $description;

    protected $completed;

    public function __contruct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {

    }
}

$task = new Task('Go to the store');

require 'index.view.php';
