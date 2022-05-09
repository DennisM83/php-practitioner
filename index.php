<?php

require 'functions.php';

$pdo = connectToDb();

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

// dd($result[2]->description);

require 'index.view.php';
