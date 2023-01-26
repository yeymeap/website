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
				<span class="breadcrumb-item active">Kiegészítők</span>
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
					<li>
						<a href="#gastrings">Húrok</a>
						<ul>
							<li>
								<a href="#gastrings">Akusztikus Gitárhúrok</a>
							</li>
							<li>
								<a href="#gestrings">Elektromos Gitárhúrok</a>
							</li>
							<li>
								<a href="#bstrings">Akusztikus Basszusgitárhúrok</a>
							</li>
							<li>
								<a href="#bestrings">Elektromos Basszusgitárhúrok</a>
							</li>
						</ul>
					</li>
					<li><a href="#picks">Pengetők</a></li>
					<li><a href="#cables">Hangszerkábelek</a></li>
					<li><a href="#bags">Hordozótáskák</a></li>
				</ul>
			</div>
		</div>
		<!-- Shop Sidebar End -->

		<!-- Shop Product Start -->
		<div class='col-lg-9 col-md-8 mb-5'>
			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='gastrings' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>AKUSZTIKUS GITÁRHÚROK</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM productshu WHERE id BETWEEN 63 and 66";
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
							<a href='product.php?id=$id'><img class='img-fluid w-100' src='../img/$image' /></a>
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
			</div>
			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='gestrings' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>ELEKTROMOS GITÁRHÚROK</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM productshu WHERE id BETWEEN 43 and 62";
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
						<a href='product.php?id=$id'><img class='img-fluid w-100' src='../img/$image' /></a>
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
			<div class="col-lg-2 col-md-2"></div>

			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='bstrings' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>AKUSZTIKUS BASSZUSGITÁRHÚROK</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM productshu WHERE id BETWEEN 75 and 78";
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
							<a href='product.php?id=$id'><img class='img-fluid w-100' src='../img/$image' /></a>
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
			<div class="col-lg-2 col-md-2"></div>

			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='bestrings' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>ELEKTROMOS BASSZUSGITÁRHÚROK</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM productshu WHERE id BETWEEN 67 and 74";
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
					<a href='product.php?id=$id'><img class='img-fluid w-100' src='../img/$image' /></a>
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
			<div class="col-lg-2 col-md-2"></div>

			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='picks' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>PENGETŐK</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM productshu WHERE id BETWEEN 79 and 89";
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
					<a href='product.php?id=$id'><img class='img-fluid w-100' src='../img/$image' /></a>
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
			<div class="col-lg-2 col-md-2"></div>

			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='cables' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>HANGSZERKÁBELEK</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM productshu WHERE id BETWEEN 90 and 94";
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
					<a href='product.php?id=$id'><img class='img-fluid w-100' src='../img/$image' /></a>
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
			<div class="col-lg-2 col-md-2"></div>

			<div class='row pb-3'>
				<div class='col-12 pb-1'>
					<h2 id='bags' class='section-title position-relative mb-4 text-black'>
						<span class='bg-white pe-3'>HORDOZÓTÁSKÁK</span>
					</h2>
				</div>
				<?php $sql = "SELECT id, manufacturer, name, price, image FROM productshu WHERE id BETWEEN 95 and 99";
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
					<a href='product.php?id=$id'><img class='img-fluid w-100' src='../img/$image' /></a>
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