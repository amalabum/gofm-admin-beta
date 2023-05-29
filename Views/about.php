<!DOCTYPE html>
 <?php
   require 'Views/includes/head.php';
 
?>

	<body class="skin-orange">
		
 <?php
   require 'Views/includes/header.php';
?>

		<section class="page">
			<div class="container" id="canvas_id">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
	          <ol class="breadcrumb">
	          	<li><a href="index.html">Home</a></li>
	            <li class="active">About Us</li>
	          </ol>
						<h1 class="page-title">Qui sommes-nous ?</h1>
						<p class="page-subtitle">apres lecture tu en sauras un peu plus</p>
						<div class="line thin"></div>
						<div class="page-description">
							<?php echo $configuration_x['Apropos']; ?>
							<div class="question">
								Avez-vous une question ? <a href="contact" class="btn btn-primary">Nous contacter</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Start footer -->
 <?php
   require 'Views/includes/footer.php';
?>
		<!-- End Footer -->

		<!-- JS -->
 <?php
   require 'Views/includes/js.php';
?>
	</body>
</html>