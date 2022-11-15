<?php include 'topnav.php';

include 'reg1.php';
include 'menu.php';

?>

		<!-- Breadcrumb Start -->
		<div class="container-fluid">
			<div class="row px-xl-5">
				<div class="col-12">
					<nav class="breadcrumb bg-white mb-30">
						<a
							class="breadcrumb-item text-dark"
							href="index-en.php"
							>Home</a
						>
						<span class="breadcrumb-item active">Register</span>
					</nav>
				</div>
			</div>
		</div>
		<!-- Breadcrumb End -->

		<!-- Checkout Start -->
    <form action="sign-up-en.php" method="POST">
		<div class="container-fluid">
			<div class="row px-xl-5 mb-5">
				<div class="col-lg-12">
					<h5
						class="section-title position-relative text-uppercase mb-3">
						<span class="bg-white pe-3">Billing Address</span>
					</h5>
					<div class="bg-white p-30">
						<div class="row">
							<div class="col-md-6 form-group mb-2">
								<label for='user'>First Name</label>
								<input
									class="form-control mt-1"
									type="text"
									placeholder="Your First Name Here"
                                    name='user' />
							</div>
							<div class="col-md-6 form-group mb-2">
								<label>Last Name</label>
								<input
									class="form-control mt-1"
									type="text"
									placeholder="Your Last Name Here" />
							</div>
							<div class="col-md-6 form-group mb-2">
								<label for="email">E-mail</label>
								<input
									class="form-control mt-1"
									type="text"
									placeholder="example@example.com"
                                    name = "email"/>
							</div>
                            <div class="col-md-6 form-group mb-2">
								<label for="pwd">Password</label>
								<input
									class="form-control mt-1"
									type="password"
									placeholder="Password Here"
                                    name = "pwd"/>
							</div>
                            <div class="col-md-6 form-group mb-2">
								<label for="pwdrepeat">Password Repeat</label>
								<input
									class="form-control mt-1"
									type="password"
									placeholder="Repeat Password"
                                    name = "pwdrepeat"/>
							</div>
							<div class="col-md-6 form-group mb-2">
								<label>Mobile Number</label>
								<input
									class="form-control mt-1"
									type="text"
									placeholder="+123 456 789" />
							</div>
							<div class="col-md-6 form-group mb-2">
								<label>Address Line 1</label>
								<input
									class="form-control mt-1"
									type="text"
									placeholder="123 Street" />
							</div>
							<div class="col-md-6 form-group mb-2">
								<label>Address Line 2</label>
								<input
									class="form-control mt-1"
									type="text"
									placeholder="123 Street" />
							</div>

							<div class="col-md-6 form-group mb-2">
								<label>City</label>
								<input
									class="form-control mt-1"
									type="text"
									placeholder="New York" />
							</div>
							<div class="col-md-6 form-group mb-2">
								<label>State</label>
								<input
									class="form-control mt-1"
									type="text"
									placeholder="New York" />
							</div>
							<div class="col-md-6 form-group mb-2">
								<label>ZIP Code</label>
								<input
									class="form-control mt-1"
									type="text"
									placeholder="123" />
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
                            <button type="submit" class="btn btn-black">Register</button> 
						</div>
					</div>
				</div>
            </div>
        </div>
    </form>

<?php include 'footer.php';?>
