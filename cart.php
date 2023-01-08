<?php include 'topnav.php'; ?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-dark" href="index.php">Home</a>
				<span class="breadcrumb-item active">Shopping Cart</span>
			</nav>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Cart Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-lg-8 table-responsive mb-5">
			<table class="table table-white table-borderless table-hover text-center mb-0">
				<thead class="thead">
					<tr>
						<th>Products</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Remove</th>
					</tr>
				</thead>
			</table>
		</div>
		<div class="col-lg-4">
			<h5 class="section-title position-relative text-uppercase mb-3">
				<span class="bg-white pe-3">Cart Summary</span>
			</h5>
			<div class="bg-white p-30 mb-5">
				<div class="border-bottom pb-2">
					<div class="d-flex justify-content-between mb-3">
						<h6>Subtotal</h6>
						<h6>0€</h6>
					</div>
					<div class="d-flex justify-content-between">
						<h6 class="font-weight-medium">Shipping</h6>
						<h6 class="font-weight-medium">0€</h6>
					</div>
				</div>
				<div class="pt-2">
					<div class="d-flex justify-content-between mt-2">
						<h5>Total</h5>
						<h5>0€</h5>
					</div>
					<a href="checkout.php" class="btn btn-block btn-black font-weight-bold my-3 py-3 text-decoration-none">Proceed To Checkout</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cart End -->

<?php include 'footer.php'; ?>