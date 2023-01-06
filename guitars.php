<?php
include 'config.php';
include 'topnav.php';
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
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=14";
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
							<a href="product.php?id=14"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=14"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=15";
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
							<a href="product.php?id=15"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=15"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=16";
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
							<a href="product.php?id=16"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=16"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=17";
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
							<a href="product.php?id=17"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=17"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=18";
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
							<a href="product.php?id=18"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=18"><?php echo $manufacturer . ' ', $name ?></a>
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
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=2"><?php echo $manufacturer . ' ', $name ?></a>
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
							<a href="product.php?id=4"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=4"><?php echo $manufacturer, ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=5";
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
							<a href="product.php?id=5"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=5"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=6";
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
							<a href="product.php?id=6"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=6"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=7";
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
							<a href="product.php?id=7"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=7"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=8";
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
							<a href="product.php?id=8"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=8"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=9";
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
							<a href="product.php?id=9"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=9"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=10";
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
							<a href="product.php?id=10"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=10"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=11";
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
							<a href="product.php?id=11"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=11"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=12";
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
							<a href="product.php?id=12"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=12"><?php echo $manufacturer . ' ', $name ?></a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5><?php echo $price ?>&euro;</h5>
							</div>
						</div>
					</div>
				</div>
				<?php
				$sql = "SELECT id, manufacturer, name, image, price FROM products WHERE id=13";
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
							<a href="product.php?id=13"><img class="img-fluid w-100" src="img/<?php echo $image ?>" alt="" /></a>
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate text-black" href="product.php?id=13"><?php echo $manufacturer . ' ', $name ?></a>
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