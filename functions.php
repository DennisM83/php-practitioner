<?php

function connectToDb()
{
    try {
        return new PDO('mysql:host=localhost:3307;dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }

};

// function dd($data)
// {
//     echo '<pre>';
//     die(var_dump($data));
//     echo '</pre>';
// }
