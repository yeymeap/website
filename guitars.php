<?php
include 'config.php';
include 'topnav.php';
?>

<?php
/*$feltetel = $_GET['id'];
$sql = "SELECT id, detail, manufacturer, name, image, price, description FROM products WHERE id=$feltetel";
$result = mysqli_query($link, $sql);
//Adatok kiolvasása adatbázisból
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	//Adatok megjelenítése
	$description = $row["description"];
	$detail = $row["detail"];
	$manufacturer = $row["manufacturer"];
	$name = $row["name"];
	$image = $row["image"];
	$price = $row["price"];
} else {
	echo "nem jo";
}*/
?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-black" href="index.php">Home</a>
				<span class="breadcrumb-item active">Guitars</span>
			</nav>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<!-- Shop Sidebar Start -->
		<div class="col-lg-2 col-md-2">
			<div id="toc_container">
				<p class="toc_title">Contents</p>
				<ul class="toc_list">
					<li><a href="#acousticg">Acoustic Guitars</a></li>
					<li><a href="#electricg">Electric Guitars</a></li>
				</ul>
			</div>
		</div>
		<!-- Shop Sidebar End -->

		<!-- Shop Product Start -->
		<div class="col-lg-9 col-md-8 mb-5">
			<div class="row pb-3">
				<div class="col-12 pb-1">
					<h2 id="acousticg" class="section-title position-relative mb-4 text-black">
						<span class="bg-white pe-3">ACOUSTIC GUITARS</span>
					</h2>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=14"><img class="img-fluid w-100" src="img/guitar-14.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=14">Fender CD-60 V3</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>138€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=15"><img class="img-fluid w-100" src="img/guitar-15.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=15">LAG Tramontane T70D</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>299€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=16"><img class="img-fluid w-100" src="img/guitar-16.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=16">LAG Tramontane T70DC</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>329€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=18"><img class="img-fluid w-100" src="img/guitar-18.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=18">Takamine GD93</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>489€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=17"><img class="img-fluid w-100" src="img/guitar-18.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=18">Alvarez MD70BG</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>929€</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Shop Product End -->

			<!-- Shop Start -->
			<!-- Shop Sidebar Start -->
			<div class="col-lg-2 col-md-2"></div>
			<!-- Shop Sidebar End -->
			<?php
			$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=1";
			$result = mysqli_query($link, $sql);
			//Adatok kiolvasása adatbázisból
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				//Adatok megjelenítése
				$manufacturer = $row["manufacturer"];
				$name = $row["name"];
				$image = $row["image"];
				$price = $row["price"];
			}
			?>
			<!-- Shop Product Start -->
			<div class="row pb-3">
				<div class="col-12 pb-1">
					<h2 id="electricg" class="section-title position-relative mb-4 text-black">
						<span class="bg-white pe-3">ELECTRIC GUITARS</span>
					</h2>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=1"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=1"><?php echo $manufacturer, ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=2";
				$result = mysqli_query($link, $sql);
				//Adatok kiolvasása adatbázisból
				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					//Adatok megjelenítése
					$manufacturer = $row["manufacturer"];
					$name = $row["name"];
					$image = $row["image"];
					$price = $row["price"];
				}
				?>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=2"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=2">Fender Squier Bullet</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=3";
				$result = mysqli_query($link, $sql);
				//Adatok kiolvasása adatbázisból
				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					//Adatok megjelenítése
					$manufacturer = $row["manufacturer"];
					$name = $row["name"];
					$image = $row["image"];
					$price = $row["price"];
				}
				?>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=3"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=3"><?php echo $manufacturer, ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=4";
				$result = mysqli_query($link, $sql);
				//Adatok kiolvasása adatbázisból
				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					//Adatok megjelenítése
					$manufacturer = $row["manufacturer"];
					$name = $row["name"];
					$image = $row["image"];
					$price = $row["price"];
				}
				?>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=3"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=3"><?php echo $manufacturer, ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=5"><img class="img-fluid w-100" src="img/guitar-5.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=5">Fender Player Series</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>749€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=6"><img class="img-fluid w-100" src="img/guitar-6.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=6">Fender American Professional II</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>1890€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=7"><img class="img-fluid w-100" src="img/guitar-7.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=7">Fender American Professional II</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>1890€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=8"><img class="img-fluid w-100" src="img/guitar-8.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=8">Epiphone Les Paul Studio</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>239€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=9"><img class="img-fluid w-100" src="img/guitar-9.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=9">Epiphone Slash Les Paul</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>899€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=10"><img class="img-fluid w-100" src="img/guitar-10.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=10">Gibson Les Paul Standard 50s</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>2298€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=11"><img class="img-fluid w-100" src="img/guitar-11.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=11">Gibson Les Paul Classic</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>1999€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=12"><img class="img-fluid w-100" src="img/guitar-12.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=12">Ibanez GRX-70QA</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>219€</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<a href="product.php?id=13"><img class="img-fluid w-100" src="img/guitar-13.png" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=13">Ibanez RG652</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>1429€</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Shop Product End -->
	</div>
</div>

<?php include 'footer.php'; ?>