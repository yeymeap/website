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
		<div class='col-lg-8 col-md-8 mb-5'>
			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='acousticg' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>ACOUSTIC GUITARS</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM products WHERE id BETWEEN 14 and 18"; //Termékek kiolvasása adatbázisból
				$result = $link->query($sql);

				while ($row = $result->fetch_assoc()) {
					$id = $row["id"]; //Termék id
					$manufacturer = $row["manufacturer"]; //Termék gyártó
					$name = $row["name"]; //Termék modell
					$price = $row["price"]; //Termék ár
					$image = $row["image"]; //Termék kép
					echo "<div class='col-lg-4 col-md-6 col-sm-6 pb-1'>
					<div class='product-item bg-light mb-4'>
						<div class='product-img position-relative overflow-hidden'>
							<a href='product.php?id=$id'><img class='img-fluid w-100' src='img/$image' /></a>
						</div>
						<div class='text-center py-4'>
							<a class='h6 text-decoration-none text-truncate text-black' href='product.php?id=$id'>$manufacturer $name</a>
							<div class='d-flex align-items-center justify-content-center mt-2'>
								<h5>$price&euro;</h5>
							</div>
						</div>
					</div>
				</div>"; //Termék kiírása
				} ?>
				<div class="col-lg-2 col-md-2"></div>
				<div class='row pb-3'>
					<div class='col-12 pb-1'>
						<h2 id='electricg' class='section-title position-relative mb-4 text-black'>
							<span class='bg-white pe-3'>ELECTRIC GUITARS</span>
						</h2>
					</div>
					<?php $sql = "SELECT id, manufacturer, name, price, image FROM products WHERE id BETWEEN 1 and 13";
					$result = $link->query($sql);
					while ($row = $result->fetch_assoc()) {
						$id = $row["id"];
						$manufacturer = $row["manufacturer"];
						$name = $row["name"];
						$price = $row["price"];
						$image = $row["image"];
						echo "<div class='col-lg-4 col-md-6 col-sm-6 pb-1'>
					<div class='product-item bg-light mb-4'>
						<div class='product-img position-relative overflow-hidden'>
							<a href='product.php?id=$id'><img class='img-fluid w-100' src='img/$image' /></a>
						</div>
						<div class='text-center py-4'>
							<a class='h6 text-decoration-none text-truncate text-black' href='product.php?id=$id'>$manufacturer $name</a>
							<div class='d-flex align-items-center justify-content-center mt-2'>
								<h5>$price&euro;</h5>
							</div>
						</div>
					</div>
				</div>";
					} ?>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2">
			<div id="filter_container">
				<h5 class="toc_title position-relative text-uppercase mb-3"><span class="bg-white pr-3">Filter by price</span></h5>
				<div class="bg-light p-4 mb-30">
					<form>
						<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
							<input type="radio" onclick="price0100()" name="pricefilter" class="custom-control-input" id="price-1">
							<label class="custom-control-label" for="price-1">$0 - $100</label>
						</div>
						<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
							<input type="radio" name="pricefilter" class="custom-control-input" id="price-2">
							<label class="custom-control-label" for="price-2">$100 - $200</label>
						</div>
						<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
							<input type="radio" name="pricefilter" class="custom-control-input" id="price-3">
							<label class="custom-control-label" for="price-3">$200 - $300</label>
						</div>
						<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
							<input type="radio" name="pricefilter" class="custom-control-input" id="price-4">
							<label class="custom-control-label" for="price-4">$300 - $400</label>
						</div>
						<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
							<input type="radio" name="pricefilter" class="custom-control-input" id="price-5">
							<label class="custom-control-label" for="price-5">$400 - $500</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>