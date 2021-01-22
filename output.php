<?php
require 'vendor/autoload.php'; // include Composer's autoloader
$collection = (new MongoDB\Client)->test->restaurants;

$insertManyResult = $collection->insertMany([
    [
        'username' => 'admin',
        'email' => 'admin@example.com',
        'name' => 'Admin User',
    ],
    [
        'username' => 'test',
        'email' => 'test@example.com',
        'name' => 'Test User',
    ],
]);

printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());

var_dump($insertManyResult->getInsertedIds());