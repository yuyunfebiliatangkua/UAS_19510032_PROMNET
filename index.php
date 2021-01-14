<!DOCTYPE html>
<html>
<head>
	<title>Membuat Sebuah Data User Perusahaan - www.userdata.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Membuat Sebuah Data User Perusahaan <br/> www.userdata.com</h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>SALAH BRO ! ( di sini pesan salah nya)</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.userdata.com">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>