<?php 
include './src/include/head.php';
?>

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
		<?php include 'src/components/nav.php'?>
		<!-- Navbar -->
		<?php include 'src/components/header.php'?>
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
		</div>
	</main>
	<!--Main layout-->

	<!--Footer-->
	<?php include './src/include/footer.php'?>
	<!--Footer-->
</body>

</html>