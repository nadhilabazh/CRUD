<?php
    if(isset($_GET['id'])){
        $id   =$_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "koneksi.php";
    $data   =mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id_mhs='$id'");
    $result    =mysqli_fetch_array($data);
    ?>
 

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Halaman Profile</title>
</head>

<style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    td {
      text-align: left;
      padding: 9px;
      width: 15px;
    }

    div.desc {
      padding: 15px;
      text-align: center;
    }
</style>

<body>
     <div class="container pt-4 bg-light">
        <div>
            <a href="login.php" style="color: blue">Kembali</a>
        </div></p>
                <h3 class="text-center font-weight-bold text-black">Detail Data Mahasiswa</h3> 
                    <br></br>
            <div class="d-flex justify-content-end">
                <div class="col-md-9 text-black" >                        
                    <table>
                        <tr>
                            <td>Foto</td>
                            <td>:</td>
                            <td><img src="gambar/<?php echo $result["foto"]?> "width="30%" ></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><?php echo $result['nim'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Mahasiswa</td>
                            <td>:</td>
                            <td><?php echo $result['nama_mhs'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Email</td>
                            <td>:</td>
                            <td><?php echo $result['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td><?php echo $result['jurusan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo $result['tgl_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><?php echo $result['tempat_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>NO HP</td>
                            <td>:</td>
                            <td><?php echo $result['no_hp'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?php echo $result['agama'] ?></td>
                        </tr>
                         <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?php echo $result['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $result['alamat'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>