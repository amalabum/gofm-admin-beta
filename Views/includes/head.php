
	<head>
	<?php
	 if (isset($_GET['page'])) {
        $page =$_GET['page'];
       }
       else{
        $page =1;
       }
       $number_per_page=01;
       $start_from=($page-1)*01;


   require 'Views/dashboard/Control/coeur/recup_data/configurations.php';
?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="trouvez toutes les informations de la region en un seul endroit : Gofm">
		<meta name="author" content="kasongo eliezer">
		<meta name="keyword" content="radio,go fm, gofm, information, rdc,  goma">
		<!-- Shareable -->
		<!-- <meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />-->
		<title>
			
		95.8 - Go fm la radio de la dignité humaine</title> 
		<!-- Bootstrap -->
		   <link rel="icon" type="image/x-icon" href="Views/dashboard/assets/h.png" />

		<link rel="stylesheet" href="Views/scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="Views/scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="Views/scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="Views/scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="Views/cripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="Views/scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="Views/scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="Views/css/style.css">
		<link rel="stylesheet" href="Views/css/skins/all.css">
		<link rel="stylesheet" href="Views/css/demo.css">
		<!-- google recaptcha -->
		<script src="https://www.google.com/recaptcha/api.js?render=6Le6JUYjAAAAAOtOWMZ9NZtVXpIdOFE2yTkYYigt"></script>
        <style>
			@media screen and (min-width: 480px) {
  #canvas_id{
	width:85%;

  }
  #socialstr{
	display:block;
  }
}
			@media screen and (max-width: 480px) {
  
  #socialstr{
	display:none ! important;
  }
}
		
		</style>
	
	</head>


