<?php

require '../config.php';


$nim_mahasiswa = $_GET['nim'];
echo $nim_mahasiswa;


$deleteMahasiswa = $collection->deleteOne(['nim' => $nim_mahasiswa]);
printf("Deleted %d document(s)\n", $deleteMahasiswa->getDeletedCount());
header("Location: http://localhost/bdbo_mongodb/layout/index.php");

?>