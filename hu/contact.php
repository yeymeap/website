<?php include 'topnav.php'; ?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-dark" href="index.php">Főoldal</a>
				<span class="breadcrumb-item active">Kapcsolatfelvétel</span>
			</nav>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Start -->
<div class="container-fluid">
	<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
		<span class="bg-white pe-3">Kapcsolatfelvétel</span>
	</h2>
	<div class="row px-xl-5">
		<div class="col-lg-7 mb-5">
			<div class="contact-form bg-light p-30">
				<div id="success"></div>
				<form name="sentMessage" id="contactForm" novalidate="novalidate">
					<div class="control-group">
						<input type="text" class="form-control" id="name" placeholder="Az Ön neve" required="required" data-validation-required-message="Kérem írja be a nevét" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="email" class="form-control" id="email" placeholder="Az Ön emaile" required="required" data-validation-required-message="Kérem írja be az email címét" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="text" class="form-control" id="subject" placeholder="Tárgy" required="required" data-validation-required-message="Kérem írja be az üzene tárgyát" />
						<p class=" help-block text-danger"></p>
					</div>
					<div class="control-group">
						<textarea class="form-control" rows="8" id="message" placeholder="Üzenet" required="required" data-validation-required-message="Kérem írja be az üzenetét"></textarea>
						<p class="help-block text-danger"></p>
					</div>
					<div>
						<button class="btn btn-black py-2 px-4" type="submit" id="sendMessageButton">
							Üzenet küldése
						</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-5 mb-5">
			<div class="bg-light p-30 mb-30">
				<iframe style="width: 100%; height: 250px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d937.091009038962!2d17.61281144521279!3d48.00018964076882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b9d5f9e0c4345%3A0x6038947289ca8186!2zxaBrb2xza8OhLCA5MjkgMDEgRHVuYWpza8OhIFN0cmVkYQ!5e0!3m2!1shu!2ssk!4v1663827951163!5m2!1shu!2ssk" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="bg-light p-30 mb-3">
				<p class="mb-2">
					<i class="fa fa-map-marker-alt text-black me-3 pe-1"></i>Iskola utca 938/6, Dunaszerdahely, 929 01, Szlovákia
				</p>
				<p class="mb-2">
					<i class="fa fa-envelope text-black me-3"></i>bence3728@gmail.com
				</p>
				<p class="mb-2">
					<i class="fa fa-phone-alt text-black me-3"></i>+421 949 131 222
				</p>
			</div>
		</div>
	</div>
</div>
<!-- Contact End -->

<?php include 'footer.php'; ?>