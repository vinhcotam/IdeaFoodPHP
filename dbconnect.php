<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('idea-food-cd7e7-firebase-adminsdk-uvj9d-5cbb7167d4.json')
    ->withDatabaseUri('https://idea-food-cd7e7-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();
?>