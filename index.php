<?php 
//include $_SERVER['DOCUMENT_ROOT'].'/work-info/core/conf/config.sistema.php';
include $_SERVER['DOCUMENT_ROOT'].'/core/conf/config.sistema.php';
include './modules/include/head.php';

?>
<title><?php echo $nombresistema?></title>

<body>

	<!--Main Navigation-->
	<header>
		<!-- Intro settings -->
		<style>
		/* Default height for small devices */
		#intro {
			height: 400px;
			/* Margin to fix overlapping fixed navbar */
			margin-top: 58px;
		}

		/* Height for devices larger than 576px */
		@media (min-width: 576px) {
			#intro {
				height: 600px;
			}
		}
		</style>

		<!-- Navbar -->
		<?php include 'modules/components/nav.html'?>
		<!-- Navbar -->

		<!-- Background image -->
		<div id="intro" class="p-5 text-center bg-image shadow-1-strong">
			<div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
				<div class="d-flex justify-content-center align-items-center h-100">
					<div class="text-white">
						<h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
						<h5 class="mb-4">Best & free guide of responsive web design</h5>
						<a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button"
							rel="nofollow" target="_blank">Start tutorial</a>
						<a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank"
							role="button">Download MDB UI KIT</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Background image -->
	</header>
	<!--Main Navigation-->

	<!--Main layout-->
	<main class="mt-5">
		<div class="container">
			<!--Section: Content-->
			<section>
				<div class="row">
					<div class="col-md-6 gx-5 mb-4">
						<div class="bg-image hover-overlay ripple shadow-2-strong" data-ripple-color="light">
							<img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
							<a href="#!">
								<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
							</a>
						</div>
					</div>

					<div class="col-md-6 gx-5 mb-4">
						<h4><strong>Facilis consequatur eligendi</strong></h4>
						<p class="text-muted">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
							eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
							sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
						</p>
						<p><strong>Doloremque vero ex debitis veritatis?</strong></p>
						<p class="text-muted">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
							nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
							alias, unde optio accusantium soluta, iusto molestiae adipisci et?
						</p>
					</div>
				</div>
			</section>
			<!--Section: Content-->

			<hr class="my-5" />

			<!--Section: Content-->
			<section class="text-center">
				<h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

				<div class="row">
					<div class="col-lg-4 col-md-12 mb-4">
						<div class="card">
							<div class="bg-image hover-overlay ripple" data-ripple-color="light">
								<img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the
									card's content.
								</p>
								<a href="#!" class="btn btn-primary">Button</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mb-4">
						<div class="card">
							<div class="bg-image hover-overlay ripple" data-ripple-color="light">
								<img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the
									card's content.
								</p>
								<a href="#!" class="btn btn-primary">Button</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mb-4">
						<div class="card">
							<div class="bg-image hover-overlay ripple" data-ripple-color="light">
								<img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the
									card's content.
								</p>
								<a href="#!" class="btn btn-primary">Button</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Section: Content-->

			<hr class="my-5" />

			<!--Section: Content-->
			<section class="mb-5">
				<h4 class="mb-5 text-center"><strong>Facilis consequatur eligendi</strong></h4>

				<div class="row d-flex justify-content-center">
					<div class="col-md-6">
						<form>
							<!-- 2 column grid layout with text inputs for the first and last names -->
							<div class="row mb-4">
								<div class="col">
									<div class="form-outline">
										<input type="text" id="form3Example1" class="form-control" />
										<label class="form-label" for="form3Example1">First name</label>
									</div>
								</div>
								<div class="col">
									<div class="form-outline">
										<input type="text" id="form3Example2" class="form-control" />
										<label class="form-label" for="form3Example2">Last name</label>
									</div>
								</div>
							</div>

							<!-- Email input -->
							<div class="form-outline mb-4">
								<input type="email" id="form3Example3" class="form-control" />
								<label class="form-label" for="form3Example3">Email address</label>
							</div>

							<!-- Password input -->
							<div class="form-outline mb-4">
								<input type="password" id="form3Example4" class="form-control" />
								<label class="form-label" for="form3Example4">Password</label>
							</div>

							<!-- Checkbox -->
							<div class="form-check d-flex justify-content-center mb-4">
								<input class="form-check-input mr-2" type="checkbox" value="" id="form2Example3" checked />
								<label class="form-check-label" for="form2Example3">
									Subscribe to our newsletter
								</label>
							</div>

							<!-- Submit button -->
							<button type="submit" class="btn btn-primary btn-block mb-4">
								Sign up
							</button>

							<!-- Register buttons -->
							<div class="text-center">
								<p>or sign up with:</p>
								<button type="button" class="btn btn-primary btn-floating mx-1">
									<i class="fab fa-facebook-f"></i>
								</button>

								<button type="button" class="btn btn-primary btn-floating mx-1">
									<i class="fab fa-google"></i>
								</button>

								<button type="button" class="btn btn-primary btn-floating mx-1">
									<i class="fab fa-twitter"></i>
								</button>

								<button type="button" class="btn btn-primary btn-floating mx-1">
									<i class="fab fa-github"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</section>
			<!--Section: Content-->
		</div>
	</main>
	<!--Main layout-->

	<!--Footer-->

	<!--Footer-->
	<?php include './modules/include/footer.php'?>
</body>

</html>