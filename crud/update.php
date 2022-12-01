<?php 
 include 'koneksi.php';

 $nim = $_GET['nim'];
 $sqlGet = "SELECT * FROM mahasiswa WHERE nim='$nim'";
 $queryGet = mysqli_query($conn, $sqlGet);
 $data = mysqli_fetch_array($queryGet);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Aplikasi Crud</title>
    <style>
        body{
            background-image:url(bg-2.jpg);
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
    <div class="w-50 mx-auto  p-3 mt-4">
        <h1>UPDATE DATA</h1>
     
        <form action="update.php" method="post">
            <label for="nim">Nim</label>
            <input type="text" id= "nim" name= 'nim' value= "<?php echo "$data[nim]";?>" class= "form-control">
            <input type="hidden" id= "nim_key" name= 'nim_key' value= "<?php echo "$nim";?>" class= "form-control">

            <label for="nim">Nama Mahasiswa</label>
            <input type="text" id= "nama_mahasiswa" name= 'nama_mahasiswa' value= "<?php echo "$data[nama_mahasiswa]";?>" class= "form-control" required>


                    <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan"  class="form-select form-control" required >
                <option> <?php echo "$data[jurusan]";?> </option>
                    <option value="informatika">Teknik Informatika</option>
                    <option value="arsitek">Teknik arsitek</option>
                    <option value="mesin">Teknik Mesin</option>
                    <option value="perangkat lunak">Teknik Perangkat Lunak</option>
            </select>




            <label for="nim">Alamat</label>
            <input type="text" id= "alamat" name= "alamat" value="<?php echo "$data[alamat]";?>" class= "form-control" required>

            <label for="kelamin">kelamin</label>
            <select name="kelamin" id="kelamin"  class="form-select form-control" required >
                <option> <?php echo "$data[kelamin]";?> </option>
                <option selected>kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">perempuan</option>
                    <option value="khusus">khusus</option>
            </select>



            <label for="nim">No telepon</label>
            <input type="text" id= "no_telepon" name= "no_telepon" value="<?php echo "$data[no_telepon]";?>" class= "form-control" required>

            <input class= "btn btn-success mt-3" type= "submit" name= "tambah" value= "Update Data">
            <a href="index.php" class="btn btn-primary float-end mt-3">BACK</a>
        </form>
    </div>

    <?php

      if (isset($_POST['tambah'])) {
            $nim = $_POST ['nim'];
            $nim_key = $_POST ['nim_key'];
            $nama_mahasiswa = $_POST ['nama_mahasiswa'];
            $jurusan = $_POST ['jurusan'];
            $alamat = $_POST ['alamat'];
            $kelamin = $_POST ['kelamin'];
            $no_telepon = $_POST ['no_telepon'];

            $jurusanSelect = $_POST['jurusan'];
            if ($jurusanSelect == 'informatika'){
                $jurusan = 'Teknik informatika';
            }if ($jurusanSelect == 'arsitek'){
                $jurusan = 'Teknik arsitek';
            }if ($jurusanSelect == 'mesin'){
                $jurusan = 'Teknik mesin';
            }if ($jurusanSelect == 'perangkat lunak'){
                $jurusan = 'Teknik perangkat lunak';
            }

            $sqlUpdate = "UPDATE mahasiswa 
                          SET nim = '$nim', nama_mahasiswa= '$nama_mahasiswa', jurusan= '$jurusan', alamat= '$alamat', kelamin='$kelamin', no_telepon= '$no_telepon'
                          WHERE nim='$nim_key'";

                          var_dump($sqlUpdate);
            $queryUpdate = mysqli_query($conn, $sqlUpdate);
            // die();
            header("location: index.php");
        }
    ?>
</body>
</html>