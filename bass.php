<?php include 'topnav.php';
include 'config.php' ?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-black" href="index.php">Home</a>
				<span class="breadcrumb-item active">Bass Guitars</span>
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
					<li>
						<a href="#acousticb">Acoustic Bass Guitars</a>
					</li>
					<li>
						<a href="#electricb">Electric Bass Guitars</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- Shop Sidebar End -->

		<!-- Shop Product Start -->
		<div class="col-lg-9 col-md-8 mb-5">
			<div class="row pb-3">
				<div class="col-12 pb-1">
					<h2 id="acousticb" class="section-title position-relative mb-4 text-black">
						<span class="bg-white pe-3">ACOUSTIC BASS GUITARS</span>
					</h2>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=39";
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
							<a href="product.php?id=39"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=39"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=40";
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
							<a href="product.php?id=40"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=40"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=41";
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
							<a href="product.php?id=41"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=41"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=42";
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
							<a href="product.php?id=42"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=42"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
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

			<!-- Shop Product Start -->
			<div class="row pb-3">
				<div class="col-12 pb-1">
					<h2 id="electricb" class="section-title position-relative mb-4 text-black">
						<span class="bg-white pe-3">ELECTRIC BASS GUITARS</span>
					</h2>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=19";
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
							<a href="product.php?id=19"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=19"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=20";
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
							<a href="product.php?id=20"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=20"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=21";
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
							<a href="product.php?id=21"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=21"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=22";
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
							<a href="product.php?id=22"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=22"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=23";
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
							<a href="product.php?id=23"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=23"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=24";
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
							<a href="product.php?id=24"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=24"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=25";
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
							<a href="product.php?id=25"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=25"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=26";
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
							<a href="product.php?id=26"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=26"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=27";
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
							<a href="product.php?id=27"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=27"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=28";
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
							<a href="product.php?id=28"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=28"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=29";
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
							<a href="product.php?id=29"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=29"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=30";
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
							<a href="product.php?id=30"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=30"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=31";
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
							<a href="product.php?id=31"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=31"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=32";
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
							<a href="product.php?id=32"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=32"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=33";
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
							<a href="product.php?id=33"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=33"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=34";
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
							<a href="product.php?id=34"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=34"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=35";
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
							<a href="product.php?id=35"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=35"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=36";
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
							<a href="product.php?id=36"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=36"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=37";
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
							<a href="product.php?id=37"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=37"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=38";
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
							<a href="product.php?id=38"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=38"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
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