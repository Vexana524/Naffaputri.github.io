<?php 
 include 'koneksi.php';

 $nim = $_GET['nim'];
 $sqlDelete = "DELETE FROM mahasiswa WHERE nim='$nim'";
 mysqli_query($conn, $sqlDelete);

 header("Location: index.php");
?>