<html>
<head>
	<title>Membuat Sebuah Data User Perusahaan - Menampilkan Data Nama Karyawan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

	<div class="judul">		
		<h1>Membuat Sebuah Data User Perusahaan</h1>
		<h2>Menampilkan Data Nama Karyawan</h2>
		<h3>www.userdata.com</h3>
	</div>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($connect,"SELECT * FROM karyawan");
		
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
		</tr>
		<?php } ?>
	</table>
    <br>
    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
</body>
</html>