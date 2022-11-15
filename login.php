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
	
	$nev = $_POST["nev"];
	$pws = $_POST["jelszo"];

	
	if (($nev != "" ) and ($pws != "") ){
	
	
	$sql = "SELECT `jelszo` FROM `adatok` WHERE `felhasznalonev` = '$nev'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	
	
    while($row = $result->fetch_assoc()) {
        $lekertpws = $row["jelszo"];
		
    }
		
		
	if (sha1($pws) == $lekertpws) {
		$_SESSION["felhasznalonev"] = $nev;
		Header( "HTTP/1.1 301 Moved Permanently" ); /* véglegesen átirányítva */
		Header( "Location: index.php" ); /* hova van átirányítva */
		exit;
	} else {
		?>
		<div class="error">Rossz jelszo vagy felhasznalonev
			<?php echo $lekertpws ?>
		</div>
		
		<?php
	}
	} else {
		
		?>
		<div class="error">Nincs felhasznalonev</div>
		<?php
		
		
	}
	}
	if (isset($_SESSION["felhasznalonev"])) {
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

    <label for="Név"><b>Felhasználónév</b></label>
    <input type="text" placeholder="Felhasználónév" name="nev" required>
	


    <label for="pws"><b>Jelszó</b></label>
    <input type="password" placeholder="Jelszó" name="jelszo" required>
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