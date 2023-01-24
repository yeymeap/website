<?php
include 'config.php';
include 'topnav.php';
?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-black" href="index.php">Főoldal</a>
				<span class="breadcrumb-item active">Gitárok</span>
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
				<p class="toc_title">Tartalom</p>
				<ul class="toc_list">
					<li><a href="#acousticg">Akusztikus Gitárok</a></li>
					<li><a href="#electricg">Elektromos Gitárok</a></li>
				</ul>
			</div>
		</div>
		<!-- Shop Sidebar End -->

		<!-- Shop Product Start -->
		<div class='col-lg-9 col-md-8 mb-5'>
			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='acousticg' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>AKUSZTIKUS GITÁROK</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM productshu WHERE id BETWEEN 14 and 18";
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
						<h2 id='electricg' class='section-title position-relative mb-4 text-black'>
							<span class='bg-white pe-3'>ELEKTROMOS GITÁROK</span>
						</h2>
					</div>
					<?php $sql = "SELECT id, manufacturer, name, price, image FROM productshu WHERE id BETWEEN 1 and 13";
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