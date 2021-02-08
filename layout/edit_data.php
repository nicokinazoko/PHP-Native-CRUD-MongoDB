<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


    <title>Edit Data</title>
</head>

<body>

    <br>
    <h2 style="text-align: center">Edit Data Mahasiswa</h2>
    <br>

    <div class="container">

        <a href="index.php" class="btn btn-outline-primary"">Home</a>
        <a href=" input_data.php" class="btn btn-outline-primary"">Input Data</a>

        <br>
        <br>

        <?php
        require '../config.php';
        $nimMahasiswa = $_GET['nim'];
        $mahasiswa = $collection->findOne(['_id' => $nimMahasiswa]);
        ?>

        <form method="POST" action='../proses/update_data.php'>
            <div class=" mb-3">
                <label for="inputNim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="inputNim" aria-describedby="inputNim" name="inputNim"
                value='<?php echo $nimMahasiswa; ?>' disabled="disabled">
                <input type="hidden" class="form-control" id="nimMahasiswa" aria-describedby="inputNim" name="nimMahasiswa"
                value='<?php echo $nimMahasiswa; ?>'>
            </div>

            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputNama" name="inputNama"
                value='<?php echo $mahasiswa->namaLengkap; ?>'>
            </div>

            <div class="mb-3">
                <label for="inputJurusan" class="form-label">Jurusan</label>
                <select class="form-select" aria-label="inputJurusan" name="inputJurusan">
                    <?php
                    if($mahasiswa->jurusan == "Sistem Informasi"){
                    echo '<option value="Sistem Informasi" selected>Sistem Informasi</option>    
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Kimia">Teknik Kimia</option>';
                    }
                    else
                    if($mahasiswa->jurusan == "Teknik Industri"){
                        echo '<option value="Sistem Informasi">Sistem Informasi</option>    
                        <option value="Teknik Industri" selected>Teknik Industri</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>';
                    }
                    else
                    if($mahasiswa->jurusan == "Teknik Informatika"){
                        echo '<option value="Sistem Informasi">Sistem Informasi</option>    
                        <option value="Teknik Industri" >Teknik Industri</option>
                        <option value="Teknik Informatika" selected>Teknik Informatika</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>';
                    }
                    else
                    if($mahasiswa->jurusan == "Teknik Kimia"){
                        echo '<option value="Sistem Informasi">Sistem Informasi</option>    
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Kimia" selected>Teknik Kimia</option>';
                    }

                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            </form>

    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>