<?php
include 'config.php';
include 'topnav.php';
?>

<!-- Termék kezdet -->
<?php
$feltetel = $_GET["id"];
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
}

?>
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-dark" href="index-en.php">Home</a>
				<a class="breadcrumb-item text-dark" href="guitars-en.html#electricg">Shop</a>
				<span class="breadcrumb-item active"><?php echo $manufacturer, ' ', $name ?></span>
			</nav>
		</div>
	</div>
</div>

<div class="container-fluid pb-5">
	<div class="row px-xl-5">
		<div class="col-lg-5 mb-30">
			<img class="ms-5" src="img/<?php echo $image ?>" alt="Image" />
		</div>
		<div class="col-lg-7 h-auto mb-30 px-5 d-flex justify-content-starts">
			<div class="h-100 bg-white p-30">
				<h3><?php echo $manufacturer, ' ', $name ?></h3>
				<h3 class="font-weight-semi-bold mb-4"><?php echo $price ?>&euro;</h3>
				<div class="d-flex align-items-center mb-4 pt-2">
					<div class="input-group quantity me-3" style="width: 130px">
						<div class="input-group-btn">
							<button class="btn btn-black btn-minus">
								<i class="fa fa-minus"></i>
							</button>
						</div>
						<input type="text" class="form-control bg-white border-0 text-center" value="1" />
						<div class="input-group-btn">
							<button class="btn btn-black btn-plus">
								<i class="fa fa-plus"></i>
							</button>
						</div>
					</div>
					<button class="btn btn-black px-3">
						<i class="fa fa-shopping-cart me-1"></i> Add To
						Cart
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row px-xl-5">
		<div class="col">
			<div class="bg-white p-30">
				<div class="nav nav-tabs mb-4">
					<a class="nav-item nav-link text-dark active text-decoration-none" data-toggle="tab" href="#tab-pane-1">Description</a>
					<a class="nav-item nav-link text-dark text-decoration-none" data-toggle="tab" href="#tab-pane-2">Information</a>
					<a class="nav-item nav-link text-dark text-decoration-none" data-toggle="tab" href="#tab-pane-3">Comments (0)</a>
				</div>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="tab-pane-1">
						<h4 class="mb-4">Product Description</h4>
						<p>
							<?php echo $description ?>
						</p>
					</div>
					<div class="tab-pane fade" id="tab-pane-2">
						<h4 class="mb-3">Parameters</h4>
						<div class="row">
							<?php echo $detail ?>
						</div>
					</div>
					<div class="tab-pane fade" id="tab-pane-3">
						<div class="row">
							<div class="col-md-6">
								<h4 class="mb-4">
									1 review for "Product Name"
								</h4>
								<div class="media mb-4">
									<img src="img/user.jpg" alt="Image" class="img-fluid me-3 mt-1" style="width: 45px" />
									<div class="media-body">
										<h6>
											John Doe<small>
												-
												<i>01 Jan 2045</i></small>
										</h6>
										<div class="text-warning mb-2">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half-alt"></i>
											<i class="far fa-star"></i>
										</div>
										<p>
											Diam amet duo labore stet
											elitr ea clita ipsum, tempor
											labore accusam ipsum et no
											at. Kasd diam tempor rebum
											magna dolores sed sed eirmod
											ipsum.
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<h4 class="mb-4">Leave a review</h4>
								<div class="d-flex my-3">
									<p class="mb-0 me-2">
										Your Rating * :
									</p>
								</div>
								<form>
									<div class="form-group">
										<label for="message">Your Review *</label>
										<textarea id="message" cols="30" rows="5" class="form-control"></textarea>
									</div>
									<div class="form-group">
										<label for="name">Your Name *</label>
										<input type="text" class="form-control" id="name" />
									</div>
									<div class="form-group">
										<label for="email">Your Email *</label>
										<input type="email" class="form-control" id="email" />
									</div>
									<div class="form-group mb-0">
										<input type="submit" value="Leave Your Review" class="btn btn-black px-3" />
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Termék vége -->

<?php include 'footer.php'; ?>