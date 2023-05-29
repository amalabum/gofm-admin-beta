<!DOCTYPE html>
 <?php
 		
  require 'Views/dashboard/Control/coeur/recup_data/configurations.php';
   
  if(isset($_GET['surlapulication'])) {
    $id=htmlspecialchars($_GET['surlapulication']);
 
    if (is_numeric($id)) {
         
         $sql= $db->query("UPDATE configurations set actif_pub='".$id."' WHERE id=2023"); 
         $query= $db->query("SELECT * FROM publications WHERE id_publication='".$id."'");
         
         $countComment= $db->query("SELECT * from comments where id_publication='".$id."'");
         $countC=$countComment->fetchall();
         
         
        
         $respons= $query->fetch();
		   if(!empty($respons)){
            $post=$respons;
 require 'Views/includes/post_head.php';

?>

	<body class="skin-orange">
		
 <?php

   require 'Views/includes/header.php';

  
            
             
?>

		<section class="single">
			<div class="container" id="canvas_id">
				<div class="row ">
					<div class="col-md-8">
						<ol class="breadcrumb">
						  <li><?php echo $post['categorie'] ; ?></li>
						  
						</ol>
						<article class="article main-article">
							<header>
								<h4><?php echo $post['titre'];?></h4>
								<ul class="details">
									<li>Posté <?php require 'Views/dashboard/Control/coeur/minuterie.php'; ?></li>
									<li><a><?php echo $post['categorie'] ; ?></a></li>
									<li>PAR Go FM </li>
								</ul>
							</header>
							<div class="main">
								<!-- <p>Meta description</p> -->
								<div class="featured">
									<figure class="post_img">
										<img src="Views/dashboard/uploads_images/<?php echo $post['imagenavant'];?>">
										<!-- <figcaption>descr</figcaption> -->
									</figure>
								</div>

								<p><?php echo $post['contenu'];?></p>
							</div>
							<!-- nombre des likes -->
						</article>
						<div class="sharing">
						<div class="title">
							<i class="ion-android-share-alt"></i> PARTAGER C'EST AIMER</div>
							 <ul class="social">
								<li>
									<a href="javascript:void(0)" id="facebook_share" class="facebook">
										<i class="ion-social-facebook"></i> Facebook
									</a>
								</li>
								<li>

								 <a  href="javascript:void(0)" class="twitter" id="twitter_share">
										<i class="ion-social-twitter"></i> Twitter
		   </a> 
								</li>
							
								<li>
									<a href="#" class="linkedin">
										<i class="ion-social-linkedin"></i> Linkedin
									</a>
								</li>
								<li>
									<a href="#" class="whatsapp">
										<i class="ion-social-whatsapp"></i> whatsapp
									</a>
								</li>
								
								
							</ul>
						</div>
						
						
						
					
										
					</div>



					<div class="col-md-4 sidebar" id="sidebar" >
						
				<aside style="margin-top:30px;">
							<h1 class="aside-title">à la une <a  style="text-decoration:none; cursor:pointer;" href="javascript:void(0)" class="all"> GO FM 95.8 MHZ</a></h1>
							<div class="aside-body">
								
										
								 <?php foreach ($posts_populars as $post): ?>
								
								<article class="article-mini">
									<div class="inner">
										<figure>
											
												<img src="Views/dashboard/uploads_images/<?php echo $post['imagenavant'];?>" alt="Sample Article">
											
										</figure>
										<div class="padding">
											<h1><a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"><?php $str=strlen($post['titre']);
                                     if($str > 90){echo substr($post['titre'],0,90); echo " ..."; }else{echo $post['titre'];}?></a></h1>
										</div>
									</div>
								</article>

                                <?php endforeach ?>	

							</div>
						</aside>
						<aside>
							<!-- <div class="aside-body">
								<form class="newsletter">
									<div class="icon">
										<i class="ion-ios-email-outline"></i>
										<h1>Newsletter</h1>
									</div>
									<div class="input-group">
										<input type="email" class="form-control email" placeholder="Your mail">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
										</div>
									</div>
									<p>By subscribing you will receive new articles in your email.</p>
								</form>
							</div> -->
						</aside>
					</div>



				</div>
			</div>
		</section>

        <?php }
         else{
		  require 'Views/includes/post_head.php';

?>

	<body class="skin-orange">
		
 <?php

   require 'Views/includes/header.php';?>

  
           <section class="not-found">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="code">
							404
						</div>
						<h1>Désolé</h1>
						<p class="lead">Aucun resulta n'eté touvé</p>
						<div class="search-form">							
							<!-- <form>
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Type something ...">
										<div class="input-group-btn">
											<button class="btn btn-primary">Search</button>
										</div>
									</div>
								</div>
							</form>								 -->
							<div class="link">
								<a href="home">Retourner à l'accueil</a>.
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
       <?php     }
    }
    else{ ?>
          <?php    echo "e 404";?>
  <?php   }

} ?>

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