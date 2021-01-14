<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

echo $nama.$alamat,$pekerjaan;
 
mysqli_query($connect,"INSERT INTO karyawan (nama,alamat,pekerjaan)VALUES('$nama','$alamat','$pekerjaan')");
 
header("location:index.php?pesan=input");
?>