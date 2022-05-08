<?php

declare (strict_types = 1);

require 'functions.php';

class Task
{

    protected $description;

    protected $completed = false;

    public function __construct(string $description)
    {
        $this->description = $description;
    }
}

$el = new Task('Go to the store');

var_dump($el);

require 'index.view.php';
