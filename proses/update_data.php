<?php

require '../config.php';

$nimInput = $_POST['nimMahasiswa'];
$namaInput = $_POST['inputNama'];
$jurusanInput = $_POST['inputJurusan'];



$mahasiswa = $collection->findOne(['nim' => $nimInput ]);

$updateMahasiswa = $collection->updateOne(
    ['nim' => $nimInput],
    ['$set' => 
    ['namaLengkap' => $namaInput,
    'jurusan' => $jurusanInput,]
    ]
);

// var_dump($updateMahasiswa);

header("Location: http://localhost/bdbo_mongodb/layout/index.php");

?>