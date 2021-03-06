<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


    <title>Home</title>
</head>

<body>

    <br>
    <h2 style="text-align: center">Data Mahasiswa</h2>
    <br>


    <div class="container">

        <a href="index.php" class="btn btn-outline-primary"">Home</a>
    <a href=" input_data.php" class="btn btn-outline-primary"">Input Data</a>

    <br>
    <br>

    <?php
    require '../config.php';
    $mahasiswa = $collection->find([]);
    ?>

    <div class=" table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    foreach($mahasiswa as $index => $mahasiswas){
                    $index = $index + 1;
                    echo "<tr>";
                        echo "<td>". $index . "</td>";
                        echo "<td>". $mahasiswas->_id . "</td>";
                        echo "<td>". $mahasiswas->namaLengkap . "</td>";
                        echo "<td>". $mahasiswas->jurusan . "</td>";
                        echo '<td>';
                        echo "<a href='edit_data.php?nim=".$mahasiswas->_id."'><i class='fas fa-edit'></i></a>";
                        echo '</td>';
                        echo '<td>';
                        echo "<a href='../proses/delete_data.php?nim=".$mahasiswas->_id."'><i class='fas fa-trash-alt'></i></a>";
                        echo '</td>';


                    echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
    </div>

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