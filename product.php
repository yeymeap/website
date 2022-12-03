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
	$feltetel = 1;
	$sql = "SELECT id, name, price, image, detail, breadcrumb FROM products WHERE id=$feltetel";
	$result = mysqli_query($link, $sql);
	//kiolvasas adatbazisbol
	if (mysqli_num_rows($result) > 0) {

		while ($row = mysqli_fetch_assoc($result)) {
			//szöveg kiolvasasa adatbazisbol 
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