<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
 
mysqli_query($connect,"UPDATE karyawan SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>