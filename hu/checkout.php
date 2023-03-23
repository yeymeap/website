<?php
include 'config.php';
$pdo = pdo_connect_mysql();
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) { //megnézi fut e már session
	session_start(); // ha nem, indít egy sessiont
}
//$_SESSION['authenticate'] = true;
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
	$_SESSION['authenticate'] = true;
	unset($_SESSION['cart']);
	header('Location: placeorder.php');
	exit;
}

include 'topnav.php';
?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-dark" href="index.php">Főoldal</a>
				<span class="breadcrumb-item active">Fizetés</span>
			</nav>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-lg-8">
			<h5 class="section-title position-relative text-uppercase mb-3">
				<span class="bg-white pe-3">Számlázási cím</span>
			</h5>
			<div class="bg-white p-30">
				<div class="row">
					<div class="col-md-6 form-group mb-2">
						<label>Keresztnév</label>
						<input class="form-control mt-1" type="text" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Vezetéknév</label>
						<input class="form-control mt-1" type="text" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>E-mail</label>
						<input class="form-control mt-1" type="text" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Telefonszám</label>
						<input class="form-control mt-1" type="text" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Lakcím 1. sora</label>
						<input class="form-control mt-1" type="text" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Lakcím 2. sora</label>
						<input class="form-control mt-1" type="text" />
					</div>

					<div class="col-md-6 form-group mb-2">
						<label>Város</label>
						<input class="form-control mt-1" type="text" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Régió</label>
						<input class="form-control mt-1" type="text" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Postai irányítószám</label>
						<input class="form-control mt-1" type="text" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Ország</label>
						<div></div>
						<select class="custom-select mt-2">
							<option selected>Szlovákia</option>
							<option>Magyarország</option>
							<option>Csehország</option>
							<option>Ausztria</option>
							<option>Lengyelország</option>
							<option>Németország</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<h5 class="section-title position-relative text-uppercase mb-3">
				<span class="bg-white pe-3">Rendelés összege</span>
			</h5>
			<div class="bg-white p-30 mb-5">
				<div class="pt-2">
					<div class="d-flex justify-content-between mt-2">
						<h5>Végösszeg</h5>
						<h5><?php echo $_SESSION['subtotal']; ?>&euro;</h5>
					</div>
				</div>
			</div>
			<div class="mb-5">
				<h5 class="section-title position-relative text-uppercase mb-3">
					<span class="bg-white pe-3">Fizetés</span>
				</h5>
				<div class="bg-white p-30">
					<div class="form-group">
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="payment" id="paypal" />
							<label class="custom-control-label" for="paypal">Paypal</label>
						</div>
					</div>
					<div class="form-group">
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="payment" id="cardpayment" />
							<label class="custom-control-label" for="cardpayment">Kártyás Fizetés</label>
						</div>
					</div>
					<div class="form-group mb-4">
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="payment" id="banktransfer" />
							<label class="custom-control-label" for="banktransfer">Banki Utalás</label>
						</div>
					</div>
					<form action="" method="POST">
						<a href="placeorder.php"><input class="btn btn-black font-weight-bold py-3 text-decoration-none" type="submit" value="Place Order" name="placeorder"></a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Checkout End -->

<?php include 'footer.php'; ?>