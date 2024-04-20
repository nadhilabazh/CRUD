<!DOCTYPE html>
<html lang="en">
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
      <a class="navbar-brand" href="#">DATA MAHASISWA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        
        <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
                  <a class="nav-link" href="tambah.php">Input Data</a>
        </li>
        </ul>
      </div>
    </nav>


<section id="About" class="About bg-light">
	<h4 align="center">Edit Data Mahasiswa</h4>
		<a href="index.php">Kembali</a><br><br>
		<form action="proses_edit.php" method="post">
		<?php
			require 'koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($conn,"select * from mahasiswa where id_mhs='$id'");
			while($d = mysqli_fetch_assoc($data)){
		?>



			<table align="center">
				<tr>
					<td><input type="hidden" name="id_mhs" value="<?php echo $d['id_mhs']; ?>">
					<label for="nim"> NIM </label></td>
					<td>:</td>
					<td>
						<input type="text" name="nim" id="nim" value="<?php echo $d['nim']; ?>" required>
					</td>
				</tr>
				<tr>
					<td><label for="nama_mhs"> Nama </label></td>
					<td>:</td>
					<td>
						<input type="text" name="nama_mhs" id="nama" value="<?php echo $d['nama_mhs']; ?>" required>
					</td>
				</tr>
				<tr>
					<td><label for="email"> Email </label></td>
					<td>:</td>
					<td>
						<input type="email" name="email" id="email" value="<?php echo $d['email']; ?>" required>
					</td>
				</tr>
				<tr>
					<td><label for="tgl_lahir"> Tanggal Lahir </label></td>
					<td>:</td>
					<td>
				<input type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>" 
				required>
					</td>
				</tr>
				<tr>
					<td><label for="tempat_lahir"> Tempat Lahir </label></td>
					<td>:</td>
					<td>
						<input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>" 
						required>
					</td>
				</tr>
				<tr>
					<td><label for="jurusan"> Jurusan </label></td>
					<td>:</td>
					<td>
						<input type="text" name="jurusan" id="jurusan" value="<?php echo $d['jurusan']; ?>" 
						required>
					</td>
				</tr>
				<tr>
					<td><label for="no_hp"> Kontak </label></td>
					<td>:</td>
					<td>
						<input type="text" name="no_hp" id="kontak" value="<?php echo $d['no_hp']; ?>">
					</td>
				</tr>
				<tr>
					<td><label for="agama"> Agama </label></td>
					<td>:</td>
					<td>
						<input type="text" name="agama" id="agama" value="<?php echo $d['agama']; ?>">
					</td>
				</tr>
				<tr>
					<td><label for="jenis_kelamin"> Jenis Kelamin </label></td>
					<td>:</td>
					<td>
						<input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>">
					</td>
				</tr>
				<tr>
					<td><label for="alamat"> Alamat </label></td>
					<td>:</td>
					<td>
						<input type="text" name="alamat" id="alamat" value="<?php echo $d['alamat']; ?>">
					</td>
				</tr>
				<tr>
					<td><label for="foto"> Foto </label></td>
					<td>:</td>
					<td>
						<input type="text" name="foto" id="foto" value="<?php echo $d['foto']; ?>">
					</td>
				</tr>
			<tr>
				<td></td>
					<td> <br><br> <button  type="submit" name="submit">Edit Data</button>
				</td>
			</tr>
			</table>
	</form>
		<?php 
		} 
		?>
	</body>
</html>
