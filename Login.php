<?php
require 'koneksi.php';
if(isset($_POST["login"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM akun WHERE username='$username'");
	if(mysqli_num_rows($result)=== 1 ){
        $row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"]) ){
		   header("Location: product.html");
		   exit;
		}
	}
	$error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Halaman Login</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login">
<h2>Halaman Login</h2>
<form action="" method="post">
 <ul>
  <li>
   <label for="username">Username :</label>
   <input type="text" name="username" id="username">
  </li>
  <li>
   <label for="password">Password :</label>
   <input type="password" name="password" id="password">
  </li>
  <li>
  <button type="submit" name="login">LOGINNN</button>
  </li>
  </ul>
 </form>
 </div>
</body>
</html>