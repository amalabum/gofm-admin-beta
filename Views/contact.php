<!DOCTYPE html>
 <?php
   require 'Views/includes/contact_head.php';
   require 'Views/dashboard/Control/coeur/recup_data/configurations.php';
   //require "Views/dashboard/Control/coeur/PHPMailer-5.2-stable/PHPMailerAutoload.php";

?>

	<body class="skin-orange">
		
 <?php
   require 'Views/includes/header.php';
?>

		<section class="page">
		
			<div class="container" id="canvas_id">
				<div class="row">
					<div class="col-md-12">
	          <ol class="breadcrumb">
	          	<li><a href="home">Home</a></li>
	            <li class="active">Contact </li>
	          </ol>
						<h1 class="page-title">Nous Contacter</h1>
						<p class="page-subtitle">NOUS VOUS ENTENDONS</p>
						<div class="line thin"></div>
						<div class="page-description">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<h3>Contact</h3>
									<p>
										Laissez nous un message, nous y reagirons 
									</p>
									<p>
										Télephone : <span class="bold"><?php echo  $configuration_x['telephone'];?></span> <br>
										Email: <span class="bold"><?php echo  $configuration_x['email'];?></span>
										<br>
										<br>
										Goma, RDC<br>
										<?php echo  $configuration_x['adress'];?>
									</p>
								</div>
								<div class="col-md-6 col-sm-6">
									 <div class="mail_respons">
                                            <?php require 'Views/dashboard/contact.php'?>
                                        </div>
									<form method="post" >
										<div class="col-md-6">
											<div class="form-group">
												<label>Nom & post-nom <span class="required"></span></label>
												<input type="text" class="form-control contact_nom" name="contact_nom" required="" placeholder="ex : kasongo eliézer ">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Adresse mail <span class="required"></span></label>
												<input type="email" class="form-control contact_email" name="contact_email" required="" placeholder="eliezerk58@gmail.com">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Objet</label>
												<input type="text" class="form-control contact_objet" name="contact_objet" focus="" placeholder="Objet">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Votre message <span class="required"></span></label>
												<textarea class="form-control contact_message" name="contact_message" style="min-height:130px;max-height:200px; max-width:100%;min-width:80%;" required="" placeholder="Veuillez ici votre message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
                                       		<input type="hidden" id="gg_recaptcha" name="g_recaptcha">
										
											</div>
										</div>

										<div class="col-md-12">
                                       
										    
											<button type="submit" name="submitContact" data-action="submit"
      class="btn btn-primary">Envoyer</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section class="maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7927.32512614206!2d106.75366058323345!3d-6.564206896052583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1377e9bdc02eea68!2zNsKwMzMnNDkuOCJTIDEwNsKwNDUnMjAuNiJF!5e0!3m2!1sen!2sid!4v1495165466482" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section> -->

		<!-- Start footer -->
		 <?php
   require 'Views/includes/footer.php';
?>
		<!-- End Footer -->

		<!-- JS -->
 <?php
   require 'Views/includes/js.php';
?>
  <!-- script google recaptcha -->


	</body>
</html>