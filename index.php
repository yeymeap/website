<!DOCTYPE html>
<html lang="hu">

<head>
<link rel="stylesheet" type="text/css" href="stilus.css">
<meta charset="UTF-8">
<title>Oldal neve</title>

</head>

<body>
<div class="hatter">
<?php
include "config.php";
include "menu.php";
?>

	
	<div>
		
		
		<?php
		$feltetel=1;
		$sql="SELECT id,cim,szoveg FROM userdata WHERE id=$feltetel";
		$result=mysqli_query($conn, $sql);
		//kiolvasas adatbazisbol
		if (mysqli_num_rows($result) > 0) {
			
			while($row=mysqli_fetch_assoc($result)) {
				//szöveg kiolvasasa adatbazisbol 
				echo '<h1 class="cim" >' . $row["cim"]. ' <br> </h1>';
				echo '<hr class="csik">';
				echo '<p class="kezdoszoveg" >' . $row["szoveg"]. ' <br> </p>';
				echo '<hr>';
			}
		} else{
			echo "nem jo";
		}
		?>
		
		
		
	</div>
</div>

</body>
</html> 