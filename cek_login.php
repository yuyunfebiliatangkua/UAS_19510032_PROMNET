<?php
//mengaktifkan session pada php
session_start();

//menghubungkan php dengan koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


//menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connect,"select * from user where username='$username' and password='$password'");
//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		//alihkan kehalaman dashboard admin
		header("location:home.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="pegawai"){
		//buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		//alihkan kehalaman dashboard pegawai
		header("location:pegawai.php");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="pengurus"){
		//buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		//alihkan kehalaman dashboard pengurus
		header("location:halaman_pengurus.php");
	
	}else{

		// alihkan kehalaman login kembali
		header("location:index.php?pesan=gagal");
	}
}else{
	header("location:index.php?pesan=gagal");
}

?>