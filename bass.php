<?php
include 'config.php';
pdo_connect_mysql();
include 'topnav.php';
?>

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
					<li><a href="#acousticb">Acoustic Bass Guitars</a></li>
					<li><a href="#electricb">Electric Bass Guitars</a></li>
				</ul>
			</div>
		</div>
		<!-- Shop Sidebar End -->

		<!-- Shop Product Start -->
		<div class='col-lg-9 col-md-8 mb-5'>
			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='acousticb' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>ACOUSTIC BASS GUITARS</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM products WHERE id BETWEEN 39 and 42";
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
				<div class="col-lg-2 col-md-2"></div>
				<div class='row pb-3'>
					<div class='col-12 pb-1'>
						<h2 id='electricb' class='section-title position-relative mb-4 text-black'>
							<span class='bg-white pe-3'>ELECTRIC BASS GUITARS</span>
						</h2>
					</div>
					<?php $sql = "SELECT id, manufacturer, name, price, image FROM products WHERE id BETWEEN 19 and 38";
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
	</div>
</div>
<?php ?>



<?php include 'footer.php' ?>