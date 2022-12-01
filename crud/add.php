<?php
include "koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image:url(bg-1.jpg);
            background-size:cover;
            color:azure;
        }
        .table{
        background:rgba(0,0,0,0.6);
        }
        td{
            color:azure;
        }
       
    </style>
</head>
<body>
    <center><h1>TAMBAH DATA</h1></center>
    <div class="w-50  mx-auto  p-3 mt-2">  
    <form action="add.php" method="post">
    <label for="nim">NIM</label>
    <input type="text" id="nim" name="nim"  class="form-control" required>

    <label for="nis">Nama</label>  
    <input type="text" id="nama"name="nama_mahasiswa" class="form-control" required>
    
    <label for="jurusan">Jurusan</label>
    <select name="jurusan" id="jurusan" class="form-select form-control" required >
    <option value="informatika">Teknik Informatika</option>
              <option value="arsitek">Teknik arsitek</option>
              <option value="mesin">Teknik Mesin</option>
              <option value="perangkat lunak">Teknik Perangkat Lunak</option>
    </select>

    <label for="nim">Alamat</label>
    <input type="text" id="alamat" name="alamat" class="form-control" required>

    <label for="kelamin">kelamin</label>
            <select name="kelamin" id="kelamin"  class="form-select form-control" required >
                    <option selected>kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">perempuan</option>
                    <option value="khusus">khusus</option>
            </select>

    <label for="nim">Telepon</label>
    <input type="text" id="no_telepon" name="no_telepon" class="form-control" required>

    <input class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">
    <a href="index.php" class="btn btn-primary float-end mt-3">BACK</a>
    </form>
    </div>
   
   <?php
    if(isset($_POST['tambah'])){
        $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST ['kelamin'];
    $no_telepon = $_POST['no_telepon'];

    $jurusanSelect= $_POST['jurusan'];
    if ($jurusanSelect == 'informatika'){
        $jurusan = 'Teknik informatika';
    }    
    if ($jurusanSelect == 'arsitek'){
        $jurusan = 'Teknik arsitek';
    }    
    if ($jurusanSelect == 'mesin'){
        $jurusan = 'Teknik mesin';
    }    
    if ($jurusanSelect == 'perangkat lunak'){
        $jurusan = 'Teknik perangkat lunak';
    }    

    $sqlGet = "SELECT * FROM mahasiswa";
    $queryGet = mysqli_query($conn, $sqlGet);
    $cek = mysqli_num_rows($queryGet);

    $sqlInsert = "INSERT INTO mahasiswa(nim,nama_mahasiswa,jurusan,alamat,kelamin,no_telepon)
                  VALUE ('$nim','$nama_mahasiswa','$jurusan','$alamat','$kelamin','$no_telepon')";
    
    try {
        $queryInsert = mysqli_query($conn, $sqlInsert);
        echo ("<div class='alert alert-success'>Data Berhasil Ditambahkan<a href='index.php'>Lihat Data</a></div>");
    } catch (\Throwable $th) {
        // var_dump($th);
        echo ("<div class='alert alert-danger'>Data Gagal Ditambahkan <a href='index.php'>Lihat Data</a></div>");
    
     // die();
    }
    
    }
    
   ?> 
</body>
</html>