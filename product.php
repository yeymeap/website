<?php
include 'config.php';
include 'topnav.php';
?>

<!-- Breadcrumb Start -->
<div class="container-fluid">

</div>
<!-- Breadcrumb End -->

<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
	<?php
	$feltetel = $_GET["id"];
	$sql = "SELECT id, detail, breadcrumb FROM products WHERE id=$feltetel";
	$result = mysqli_query($link, $sql);
	//Adatok kiolvasása adatbázisból
	if (mysqli_num_rows($result) > 0) {

		while ($row = mysqli_fetch_assoc($result)) {
			//Adatok megjelenítése
			echo $row["breadcrumb"];
			echo $row["detail"];
		}
	} else {
		echo "nem jo";
	}
	?>
</div>
<!-- Shop Detail End -->

<?php include 'footer.php'; ?>