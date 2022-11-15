<?php 
	error_reporting(0);
	SESSION_START();

?>

<!DOCTYPE html>
<html lang="hu">

<head>
<link rel="stylesheet" type="text/css" href="stilus.css">
<meta charset="UTF-8">

<title>Bejelentkezés</title>
</head>


<body>
<div class="hatter">
<?php
include "menu.php";
include 'config.php';


?>

<?php 
	
	$name = $_POST["name"];
	$pwd = $_POST["pwd"];

	
	if (($name != "" ) and ($pwd != "") ){
	
	
	$sql = "SELECT password FROM userdata WHERE username = '$user'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	
	
    while($row = $result->fetch_assoc()) {
        $lekertpwd = $row["password"];
		
    }
		
		
	if (sha1($pwd) == $lekertpwd) {
		$_SESSION["username"] = $user;
		Header( "HTTP/1.1 301 Moved Permanently" ); /* véglegesen átirányítva */
		Header( "Location: index.php" ); /* hova van átirányítva */
		exit;
	} else {
		?>
		<div class="error">Rossz jelszo vagy felhasznalonev
			<?php echo $lekertpwd ?>
		</div>
		
		<?php
	}
	} else {
		
		?>
		<div class="error">Nincs felhasznalonev</div>
		<?php
		
		
	}
	}
	if (isset($_SESSION["username"])) {
?>

<h1>Be vagy jelentkezve</h1>
<a href="exit.php"><div class="kilepes">Kilepes</div></a>

<?php
	} else {
		
	 ?> 
<form action="login.php" method="POST"> 
  <div class="container">
    <h1>Bejelentkezés</h1>
    
    <hr>

    <label for="user"><b>Felhasználónév</b></label>
    <input type="text" placeholder="Felhasználónév" name="user" required>
	


    <label for="pwd"><b>Jelszó</b></label>
    <input type="password" placeholder="Jelszó" name="password" required>
    <hr>

   
    <button type="submit" class="registerbtn">Bejelentkezés</button>

  </div>


</form>


<?php

	}
?>
</div>

</body>
</html> 