<?php 
 include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
            background-image:url(bg-3.png);
            background-size:cover;
            color : azure;
            
        }
        .table{
        background:rgba(0,0,0,0.6);
        
        }
        .container{
            background:rgba(0,0,0,0.2);
            border-radius:10px;
        }
        td{
            color:azure;
        }
        h1:hover{
            color:gold;
            scale:98%;
        }
    </style>
 
    <title>Aplikasi Crud</title>
   
</head>
<body>
  <div class= "container mt-5 mb-7 ">
        <center><h1>Tabel Data Mahasiswa</h1></center>
        <!-- <a href="proyek/login-system/home.php"><button>Log out</button></a> -->
        <a href="add.php" class="btn btn-success btn-ad mt-3 ">Tambah</a>
        <table class="table table-striped table-hover table-bordered mt-3 mb-3">
            <thead class="table-dark">
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>kelamin</th>
                <th>No telepon</th>
                <th>Aksi</th>
            </thead>
            <?php
              $sqlget = "SELECT * FROM mahasiswa";
              $query = mysqli_query($conn, $sqlget);

              while($data = mysqli_fetch_array($query)) {
                    echo "
                        <tbody>
                            <tr>
                                <td>$data[nim]</td>
                                <td>$data[nama_mahasiswa]</td>
                                <td>$data[jurusan]</td>
                                <td>$data[alamat]</td>
                                <td>$data[kelamin]</td>
                                <td>$data[no_telepon]</td>
                                <td>
                                    <div class='row'>
                                        <div class='col d-flex justify-content-center'>
                                        <a href='update.php?nim=$data[nim]' class='btn btn-sn btn-warning'>Update</a>
                                        </div>
                                        <div class='col d-flex justify-content-center'>
                                        <a href='delete.php?nim=$data[nim]' class='btn btn-sn btn-danger'>Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    ";
                }
            ?>
        </table>
    </div>
</body>
</html>