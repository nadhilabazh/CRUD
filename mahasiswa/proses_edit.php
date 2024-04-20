<?php
 // koneksi database
require 'koneksi.php';
 // menangkap data yang di kirim dari form
 // cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
// ambil data dari tiap elemen dalam form
$id_mhs = $_POST["id_mhs"];
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
 // query update data
$query="UPDATE mahasiswa SET
nim='$nim', nama_mhs='$nama_mhs', email='$email', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', jurusan='$jurusan', no_hp='$no_hp', agama='$agama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', foto='$foto' where id_mhs='$id_mhs'";
mysqli_query($conn, $query);
 // cek apakah data berhasil diedit atau tidak
if(mysqli_affected_rows($conn) > 0) {
 echo "<script language='javascript'>
 alert ('Data mahasiswa berhasil diedit'); 
 document.location='index.php';
 </script>";
 }
 Else {
 echo "<script language='javascript'>
 alert ('Data mahasiswa gagal diedit'); 
 </script>";
 echo mysqli_error($conn);
 } }
?>
