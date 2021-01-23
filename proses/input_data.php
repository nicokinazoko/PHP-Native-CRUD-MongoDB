<?php


// require '../vendor/autoload.php'; // include Composer's autoloader

require '../config.php';

$nimInput = $_POST['inputNim'];
$namaInput = $_POST['inputNama'];
$jurusanInput = $_POST['inputJurusan'];

echo $nimInput . "<br>";
echo $namaInput . "<br>";
echo $jurusanInput . "<br>";

// $collection = (new MongoDB\Client)->test->users;

// $insertOneResult = $collection->insertOne([
//     'username' => 'admin',
//     'email' => 'admin@example.com',
//     'name' => 'Admin User',
// ]);

$insertOneResult = $collection->insertOne([
    'nim' => $nimInput,
    'namaLengkap' => $namaInput,
    'jurusan' => $jurusanInput,
]);

// printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

echo "<br>";

header("Location: http://localhost/bdbo_mongodb/layout/index.php");
exit();

// var_dump($insertOneResult->getInsertedId());