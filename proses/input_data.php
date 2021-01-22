<?php


require '../vendor/autoload.php'; // include Composer's autoloader

$nimInput = $_POST['inputNim'];

echo $nimInput . "<br>";

$collection = (new MongoDB\Client)->test->users;

$insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

echo "<br>";

// header('Location : layout/index.php');

var_dump($insertOneResult->getInsertedId());