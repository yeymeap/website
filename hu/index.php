<?php include 'topnav.php'; ?>

<!-- Carousel Start -->
<div class="container-fluid mb-3">
	<div class="row px-xl-5">
		<div class="col-lg">
			<div id="header-carousel" class="carousel carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#header-carousel" data-slide-to="1"></li>
					<li data-target="#header-carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item position-relative active" style="height: 430px">
						<img class="position-absolute w-100 h-100" src="../img/carousel-1.jpg" style="object-fit: fill" />
						<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
							<div class="p-3" style="max-width: 700px">
								<h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
									Gitárok
								</h1>
								<p class="mx-md-5 px-5 animate__animated animate__bounceIn">
									Elektromos és Akusztikus Gitárok
								</p>
								<a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp text-decoration-none" href="guitars.php">Vásárlás</a>
							</div>
						</div>
					</div>
					<div class="carousel-item position-relative" style="height: 430px">
						<img class="position-absolute w-100 h-100" src="../img/carousel-2.jpg" style="object-fit: fill" />
						<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
							<div class="p-3" style="max-width: 700px">
								<h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
									Basszusgitárok
								</h1>
								<p class="mx-md-5 px-5 animate__animated animate__bounceIn">
									Elektromos és Akusztikus Basszusgitárok
								</p>
								<a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp text-decoration-none" href="bass.php">Vásárlás</a>
							</div>
						</div>
					</div>
					<div class="carousel-item position-relative" style="height: 430px">
						<img class="position-absolute w-100 h-100" src="../img/carousel-3.jpg" style="object-fit: fill" />
						<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
							<div class="p-3" style="max-width: 700px">
								<h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
									Gitár és Basszusgitár Erősítők
								</h1>
								<p class="mx-md-5 px-5 animate__animated animate__bounceIn">
									Lámpás, Tranzisztor és Modellező Erősítők Gitárra és Basszusgitárra
								</p>
								<a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp text-decoration-none" href="amplifiers.php">Vásárlás</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Carousel End -->

<!-- Featured Start -->
<div class="container-fluid pt-5">
	<div class="row px-xl-5 pb-3">
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="d-flex align-items-center bg-light mb-4" style="padding: 30px">
				<h1 class="fa fa-check text-green m-0 me-3"></h1>
				<h5 class="font-weight-semi-bold m-0">Minőségi Termékek</h5>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="d-flex align-items-center bg-light mb-4" style="padding: 30px">
				<h1 class="fa fa-shipping-fast text-info m-0 me-2"></h1>
				<h5 class="font-weight-semi-bold m-0">Ingyenes Szállítás</h5>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="d-flex align-items-center bg-light mb-4" style="padding: 30px">
				<h1 class="fas fa-exchange-alt text-red m-0 me-3"></h1>
				<h5 class="font-weight-semi-bold m-0">14 Napos Visszatérítés</h5>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="d-flex align-items-center bg-light mb-4" style="padding: 30px">
				<h1 class="fa fa-phone-volume text-dark m-0 me-3"></h1>
				<h5 class="font-weight-semi-bold m-0">24 Órás Támogatás</h5>
			</div>
		</div>
	</div>
</div>
<!-- Featured End -->

<!-- Categories Start -->
<div class="container-fluid pt-5">
	<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
		<span class="bg-white pe-3">Gitárok - Basszusgitárok</span>
	</h2>
	<div class="row px-xl-5 pb-3">
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="guitars.php#acousticg">
				<div class="cat-item d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-2.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Akusztikus Gitárok</h6>
						<small class="text-body">5 Termék</small>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="guitars.php#electricg">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-1.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Elektromos Gitárok</h6>
						<small class="text-body">13 Termék</small>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="bass.php#acousticb">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-3.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Akusztikus Basszusgitárok</h6>
						<small class="text-body">4 Termék</small>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="bass.php#electricb">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-4.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Elektromos Basszusgitárok</h6>
						<small class="text-body">20 Termék</small>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- Categories End -->

<!-- Categories Start -->
<div class="container-fluid pt-5">
	<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
		<span class="bg-white pe-3">Erősítők</span>
	</h2>
	<div class="row px-xl-5 pb-3">
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="amplifiers.php#electron">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-6.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Lámpás Kombóerősítők</h6>
						<small class="text-body">5 Termék</small>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="amplifiers.php#transistor">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-5.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Tranzisztoros Kombóerősítők</h6>
						<small class="text-body">5 Termék</small>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="amplifiers.php#modelling">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-7.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Modellező Kombóerősítők</h6>
						<small class="text-body">5 Termék</small>
					</div>
				</div>
			</a>
		</div>
	</div>
	<h2 class="section-title position-relative mx-xl-5 mb-4"></h2>
	<div class="row px-xl-5 pb-3">
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="amplifiers.php#bamp">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-8.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Basszusgitár Kombóerősítők</h6>
						<small class="text-body">16 Termék</small>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- Categories End -->

<!-- Categories Start -->
<div class="container-fluid pt-5 mb-5">
	<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
		<span class="bg-white pe-3">Kiegészítők</span>
	</h2>
	<div class="row px-xl-5 pb-3">
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="misc.php#gastrings">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-9.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Gitárhúrok</h6>
						<small class="text-body">20 Termék</small>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="misc.php#bstrings">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-13.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Basszusgitárhúrok</h6>
						<small class="text-body">8 Termék</small>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="misc.php#picks">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-10.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Pengetők</h6>
						<small class="text-body">11 Termék</small>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="misc.php#cables">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-11.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Kábelek</h6>
						<small class="text-body">5 Termék</small>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
			<a class="text-decoration-none" href="misc.php#bags">
				<div class="cat-item img-zoom d-flex align-items-center mb-4">
					<div class="overflow-hidden" style="width: 100px; height: 100px">
						<img class="img-fluid bg-white" src="../img/cat-12.png" alt="" />
					</div>
					<div class="flex-fill ps-3 text-black">
						<h6>Hordozótáskák</h6>
						<small class="text-body">5 Termék</small>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- Categories End -->

<?php include 'footer.php'; ?>