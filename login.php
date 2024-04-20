<?php
require_once 'helper/connection.php';
session_start();
if (isset($_POST['submit'])) {
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin WHERE user_name='$user_name' and password='$password' LIMIT 1";
  $result = mysqli_query($connection, $sql);

  $row = mysqli_fetch_assoc($result);
  if ($row) {
    $_SESSION['login'] = $row;
    header('Location: index.php');
  }
}
?>



<?php 
	require 'koneksi.php';
	// Ambil data dari mahasiswa
	$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>

	 <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

</head>
<body>

	 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <a class="navbar-brand" href="mahasiswa/index.php">DATA MAHASISWA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        
        <li class="nav-item active">
                  <a class="nav-link" href="mahasiswa/index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
                  <a class="nav-link" href="mahasiswa/tambah.php">Input Data</a>
        </li>
        </ul>
      </div>
    </nav><br>

  
        	<form action="" method="get">
				<input type="text" name="keyword" size="40" autofocus placeholder="Masukkan pencarian" autocomplete="off">
				<button type="submit" name="cari">Cari</button>
			</form><br>
	


	
			<table border="1" cellpadding="5" cellspacing="0">
	 <div class="page-wrapper p-t-45 p-b-50">
        <section class="page-section portfolio" id="input-data">
                <br><br>
                
                <div>
                </div>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                </div>

                  <table class="table">
                    <thead class="thead table-info">
			<tr align="center">
				<th>No.</th>
				<th>Aksi</th>
				<th>Foto</th>
				<th>NIM</th>
				<th>Nama</th>

			</tr>
		</thead>
	<?php 
		if(isset($_GET['cari'])){
			$cari = $_GET['keyword'];
			$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE

				nama_mhs LIKE '%$cari%' OR
				nim LIKE '%$cari%' OR
				email LIKE '%$cari%' OR
				jurusan LIKE '%$cari%' ");
		}
		$i=1;
		// Ambil data (fetch) mahasiswa dari object result
		// mysqli_fetch_assoc() => mengembalikan array numerik
		// mysqli_fetch_array() => mengembalikan array keduanya
		while ($row = mysqli_fetch_assoc($result)):
	?>

	<section id="About" class="About bg-light"> 
        <div class="container text-center">
            <div class="row">
                <div class="col">
		<tr align="center">
			<td><?php echo $i++ ; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $row['id_mhs']; ?> ">Edit</a>
				<a href="detail.php?id=<?php echo $row['id_mhs'];?>" > Detail </a>
				<a href="hapus.php?id=<?php echo $row['id_mhs'];?>" > Delete</a>

			</td>
			<td>
				<img src="gambar/<?php echo $row["foto"]?>" width="70">
			</td>
				<td><?php echo $row["nim"]?></td>
				<td><?php echo $row["nama_mhs"]?></td>


		</tr>

	<?php
		endwhile 
	?>
	</table>
</body>
</html>
