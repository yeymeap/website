<?php
include 'config.php';
include 'topnav.php';
include 'comment.php';
$pdo = pdo_connect_mysql();
?>


<!-- Termék kezdet -->
<?php
$pid = $_GET["id"];
$stmt = $link->prepare("SELECT id, detail, manufacturer, name, image, price, description FROM products WHERE id = ?");
$stmt->bind_param("i", $pid);
$stmt->execute();
$result = $stmt->get_result();
//Adatok kiolvasása adatbázisból
if (mysqli_num_rows($result) > 0) {
	$product = $row = mysqli_fetch_assoc($result);
	//Adatok megjelenítése
	$description = $row["description"];
	$detail = $row["detail"];
	$manufacturer = $row["manufacturer"];
	$name = $row["name"];
	$image = $row["image"];
	$price = $row["price"];
} else {
	exit('Product does not exist!');
}
?>


<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-dark" href="index.php">Home</a>
				<a class="breadcrumb-item text-dark" href="#" onclick="backButton()">Previous page</a>
				<span class="breadcrumb-item active"><?php echo "$manufacturer $name" ?></span>
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
				<h3><?php echo "$manufacturer $name" ?></h3>
				<h3 class="font-weight-semi-bold mb-4"><?php echo $price ?>&euro;</h3>
				<form action="cart.php" method="POST">
					<div class="d-inline-flex">
						<input class="form-control bg-white border-1 text-center" style="width: 130px;" type="number" name="quantity" value="1" min="1" placeholder="Quantity" required>
						<input type="hidden" name="product_id" value="<?= $_GET['id'] ?>">
						<input class="btn btn-black mx-3" type="submit" value="Add to cart">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row px-xl-5">
		<div class="col">
			<div class="bg-white p-30">
				<div class="nav nav-tabs mb-4">
					<a class="nav-item nav-link text-dark active text-decoration-none" data-toggle="tab" href="#tab-pane-1">Description</a>
					<a class="nav-item nav-link text-dark text-decoration-none" data-toggle="tab" href="#tab-pane-2">Information</a>
					<a class="nav-item nav-link text-dark text-decoration-none" data-toggle="tab" href="#tab-pane-3">Comments</a>
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
							<?php
							if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
								echo "<div class='col-md-6'>
								<h4 style='text-align:center' class='mb-4'>Leave a comment</h4>
								<form method='POST' action='" . setComments($link) . "'>
									<div class='form-group'>
										<label for='comment'>Your Comment</label>
										<textarea class='comment-box' name='comment' cols='30' rows='5' class='form-control'></textarea>
									</div>
									<div class='form-group mb-5'>
										<input type='submit' name='commentSubmit' value='Leave Your Comment' class='btn btn-black mt-2 px-3' />
									</div> 
								</form>
							</div>";
							} else {
								echo "<div class='col-md-6'>
							<h4 class='text-gray-dark' style='text-align:center'><a href='sign-in.php'>Log in</a> or <a href='sign-up.php'>register</a> to leave a comment!</h4>
							</div>";
							} ?>
							<div class="col-md-6">
								<h4 style='text-align:center' class="mb-4">
									<?php
									$stmt = $link->prepare("SELECT COUNT(*) AS comnum FROM comments WHERE pid = ?");
									$stmt->bind_param("s", $pid);
									$stmt->execute();
									$result = $stmt->get_result();
									$comnum = mysqli_fetch_assoc($result)['comnum'];
									echo "$comnum comments for: $manufacturer $name";
									$stmt->close(); ?>
								</h4>
								<div style="padding-top: 26px;">
									<?php getComments($link); ?>
								</div>
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