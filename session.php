<!DOCTYPE html>
<html>
<head>
	<title>Halaman Session</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['email']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Selamat Datang</h1>
 
	<p>Halo <b><?php echo $_SESSION['email']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['email']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
 
</body>
</html>
