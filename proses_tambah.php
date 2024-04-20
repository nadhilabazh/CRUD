<?php
// koneksi database
require 'koneksi.php';
// menangkap data yang di kirim dari form
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {

// ambil data dari tiap elemen dalam form
	$nim = htmlspecialchars($_POST["nim"]);
	$nama_mhs = htmlspecialchars($_POST["nama_mhs"]);
	$email = htmlspecialchars($_POST["email"]); 
	$tgl_lahir = date("Y-m-d", strtotime($_POST["tgl_lahir"]));
	$tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
	 $jurusan = htmlspecialchars($_POST["jurusan"]);
	 $no_hp = htmlspecialchars($_POST["no_hp"]);
	 $agama = htmlspecialchars($_POST["agama"]);
	 $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
 	 $alamat = htmlspecialchars($_POST["alamat"]);
	 $foto = $_POST["foto"];

 // query insert data
// menginput data ke database
$query="INSERT INTO mahasiswa VALUES
(' ', '$nim','$nama_mhs','$email','$tgl_lahir', '$tempat_lahir', '$jurusan','$no_hp','$agama','$jenis_kelamin','$alamat','$foto')"; 
mysqli_query($conn, $query);

// cek apakah data berhasil ditambahkan atau tidak
	if(mysqli_affected_rows($conn) > 0) {
	 echo "<script language='javascript'>
	 alert ('Data mahasiswa berhasil ditambahkan'); 
	 document.location='index.php';
	 </script>";
	 }
	 else
 {
	 echo "<script language='javascript'>
	 alert ('Data mahasiswa gagal ditambahkan'); 
	 </script>";
	 echo mysqli_error($conn);
 }
}
?>
