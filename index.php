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
	</header>
	<!--Main Navigation-->

	<!--Main layout-->
	<main class="mt-5">
		<?php include 'src/components/header.php'?>
		<div class="container">
			<!--Section: Content-->
			<section>
				<div class="row">
					<div class="col-md-6 gx-5 mb-4">
						<div class="bg-image hover-overlay ripple shadow-2-strong" data-ripple-color="light">
							<img src="<?php echo img?>undraw_static_assets_rpm6.png" class="img-fluid rounded" />
							<a href="#!">
								<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
							</a>
						</div>
					</div>

					<div class="col-md-6 gx-5 mb-4">
						<h4><strong>Desarrollos a tu medida con gran performance.</strong></h4>
						<p class="text-muted p-2">
							Inicia el proyecto que tienes en mente
							Con WORKINFO puedes obtener ese crecimiento que buscabas para tu negocio.
							Crear un sistema puede ser complicado, pero con un correcto proceso de desarrollo y alcances definidos,
							puedes automatizar los procesos que parecían imposibles.
						</p>
						<p><strong>Servicios que ayudarán a la consolidación de tu empresa.?</strong></p>
						<p class="text-muted p-2">
							El desarrollo de servicios y aplicaciones a medida es una de las ventajas que te podemos ofrecer en
							WORKINFO. Puedes mejorar los procesos de tu empresa, implementar conexiones con otros sistemas, añadir
							funcionalidades de terceros y mucho más.
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