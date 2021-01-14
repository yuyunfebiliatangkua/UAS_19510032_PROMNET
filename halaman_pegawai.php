<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pegawai - www.userdata.com</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Pegawai</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

	<a><a href="https://www.userdata.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Sebuah Data User Perusahaan</a> - www.userdata.com</a>
</body>
</html>