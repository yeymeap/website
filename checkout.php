<?php include 'topnav.php'; ?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-dark" href="index.php">Home</a>
				<span class="breadcrumb-item active">Checkout</span>
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
				<span class="bg-white pe-3">Billing Address</span>
			</h5>
			<div class="bg-white p-30">
				<div class="row">
					<div class="col-md-6 form-group mb-2">
						<label>First Name</label>
						<input class="form-control mt-1" type="text" placeholder="Your First Name Here" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Last Name</label>
						<input class="form-control mt-1" type="text" placeholder="Your Last Name Here" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>E-mail</label>
						<input class="form-control mt-1" type="text" placeholder="example@email.com" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Mobile Number</label>
						<input class="form-control mt-1" type="text" placeholder="+123 456 789" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Address Line 1</label>
						<input class="form-control mt-1" type="text" placeholder="123 Street" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Address Line 2</label>
						<input class="form-control mt-1" type="text" placeholder="123 Street" />
					</div>

					<div class="col-md-6 form-group mb-2">
						<label>City</label>
						<input class="form-control mt-1" type="text" placeholder="New York" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>State</label>
						<input class="form-control mt-1" type="text" placeholder="New York" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>ZIP Code</label>
						<input class="form-control mt-1" type="text" placeholder="123" />
					</div>
					<div class="col-md-6 form-group mb-2">
						<label>Country</label>
						<div></div>
						<select class="custom-select mt-2">
							<option selected>Slovakia</option>
							<option>Hungary</option>
							<option>Czech Republic</option>
							<option>Austria</option>
							<option>Poland</option>
							<option>Germany</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<h5 class="section-title position-relative text-uppercase mb-3">
				<span class="bg-white pe-3">Order Total</span>
			</h5>
			<div class="bg-white p-30 mb-5">
				<div class="border-bottom d-flex justify-content-between">
					<h6 class="mb-3">Products</h6>
					<h6 class="mb-3">0</h6>
				</div>
				<div class="border-bottom pt-3 pb-2">
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
				</div>
			</div>
			<div class="mb-5">
				<h5 class="section-title position-relative text-uppercase mb-3">
					<span class="bg-white pe-3">Payment</span>
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
							<input type="radio" class="custom-control-input" name="payment" id="directcheck" />
							<label class="custom-control-label" for="directcheck">Direct Check</label>
						</div>
					</div>
					<div class="form-group mb-4">
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="payment" id="banktransfer" />
							<label class="custom-control-label" for="banktransfer">Bank Transfer</label>
						</div>
					</div>
					<a href="#" class="btn btn-block btn-black font-weight-bold py-3 text-decoration-none">Place Order</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Checkout End -->

<?php include 'footer.php'; ?>