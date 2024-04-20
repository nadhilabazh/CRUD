<!DOCTYPE html>
<html>
<head>
	<title>Tugas Login</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="app" >
    <section class="section" >
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand"  align="center">
			<img src="gambar/lambang.png"  width="10%" ></td>
            </div>
			
	<h1>Pemrograman Session & Cookies<br/></h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Email Dan Password Tidak Sesuai !!!</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="text">Silahkan login</p>
 
		<form action="login.php" method="post">
			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email..." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password..." required="required">
 <br><br>
			<input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
			<label class="custom-control-label" for="remember-me">Ingat Saya</label><br><br>

			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
	<div class="simple-footer" align="center">
              Copyright @Nadhila.Bazhlina 2021
            </div>
 
 
</body>
</html>
