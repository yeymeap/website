<!DOCTYPE html>
<html lang="hu">

<head>
<link rel="stylesheet" type="text/css" href="stilus.css">
<meta charset="UTF-8">

<title>Regisztáció</title>
</head>


<body>
<div class="hatter">
<?php
include "menu.php";



	include "config.php";
	
	$user =  $_POST['user'];
	$email = $_POST['email'];
	$pwd =  $_POST['pwd'];
	$pwdrepeat = $_POST['pwdrepeat'];
	
	
	if (isset( $_POST['user'])) {
		if (($pwd == $pwdrepeat) && (strlen($pwd) >= 3) && (strlen($email) >= 4) && (strlen($user) >= 4) && ($pwd != $user) 
      && !filter_var($email, FILTER-VALIDATE-EMAIL)) {
			$pwd = Sha1($pwd);
			$sql = "INSERT INTO userdata(id, username, password, email) VALUES (NULL, '$user', '$pwd', '$email');";
			mysqli_query($conn, $sql);
		} else {
			echo "Incorrect data submitted";
		}

	}


?>
<div>
	
 <form action="reg.php" method="POST">
  <div class="container">
    <h1>Regisztáció</h1>
    <p>Kérlek írj be minden adatot.</p>
    <hr>
	  <label for="user"><b>Felhasználónév</b></label>
    <input type="text" placeholder="Felhasználónév" name="user" required>

    <label for="email"><b>Email Cím</b></label>
    <input type="text" placeholder="Email cím" name="email" required>

    <label for="pwd"><b>Jelszó</b></label>
    <input type="password" placeholder="Jelszó" name="pwd" required>

    <label for="pwdrepeat"><b>Jelszó ujra</b></label>
    <input type="password" placeholder="Jelszó ujra" name="pwdrepeat" required>
    <hr>

    
    <button type="submit" class="registerbtn">Regisztáció</button>
	
	
	  <div class="container signin">
    <p>Már van felhasználód? <a href="login.php">Jelentkezz be</a></p>
  </div>
  </div>


</form>

</div>
</div>

</body>
</html> 