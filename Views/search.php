<!DOCTYPE html>
 <?php
   require 'Views/includes/head.php';
?>

	<body class="skin-orange">
		
 <?php
   require 'Views/includes/header.php';
?>

						<?php



    if(isset($_GET['keyword'])) {
   
    $key = $_GET['keyword'];
	$keywords= explode(" ",trim($key));
	for ($i=0; $i < count($keywords) ; $i++) 
	 $kw[$i]= "titre like '%".$keywords[$i]."%'";

      
	$posts= $db->query("SELECT * FROM publications WHERE ".implode(" or ",$kw)); 
    while ($all_post =  $posts->fetch()){
       $bykeys[]=$all_post;
	}


	$recup_article_categories= $db->query("SELECT * FROM publications"); 
    while ($all_categorie =  $recup_article_categories->fetch()){
       $bycategorie_for_pagination[]=$all_categorie;
    }
         
        
        
           if(!empty($bykeys !=0)){
            
            ?>

		 <section class="category">
		  <div class="container" id="canvas_id">
		    <div class="row">
		      <div class="col-md-8 text-left">
		        <div class="row">
		          <div class="col-md-12">        
		            <ol class="breadcrumb">
		              <li><a href="#">Home</a></li>
		              <li class="active">resultat</li>
		            </ol>
		            <h3 class="page-title">Résutlat(s) de : <?php echo $key; ?> </h3>
		            <p class="page-subtitle"> <i> <?php
					  $nombre = null;
					  $nombre=count($bykeys);
 echo $nombre; ?></i> resultat(s) trouvé(s)</p>
		          </div>
		        </div>
		        <div class="line"></div>
		        <div class="row">
		          
		  
		         
<?php foreach ($bykeys as $post): ?>
									    
<article class="col-md-12 article-list">
								<div class="inner">
									<figure style="background:inherit;">
										<a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>">
											<img src="Views/dashboard/uploads_images/<?php echo $post['imagenavant'];?>" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"><?php echo $post['categorie'];?></a>
											</div>
											<div class="time"><?php echo $post['categorie'];?></div>
										</div>
										<h1><a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"><?php $str=strlen($post['titre']);
                                     if($str > 90){echo substr($post['titre'],0,90); echo " ..."; }else{echo $post['titre'];}?></a></h1>
										<p>
										<?php 
                                             echo substr($post['contenu'],0,200); echo " ...";?>
										</p>
										<footer>
											<a href="javascript:viod(0)" class="love">GO FM- 95.8 MHZ</a>
											<a class="btn btn-primary more" href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>">
												<div>Lire la suite</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
   <?php endforeach ; ?>
		          
		         <div class="line transparent little"></div>
						<div class="row">
							
							<div class="col-md-12 col-sm-12">
								<h1 class="title-col">
									infos en continu
									<div class="carousel-nav" id="hot-news-nav">
										<div class="prev">
											<i class="ion-ios-arrow-left"></i>
										</div>
										<div class="next">
											<i class="ion-ios-arrow-right"></i>
										</div>
									</div>
								</h1>

								<div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
                                <?php foreach ($posts_populars as $post): ?>
									<article class="article-mini">
										<div class="inner">
											
											<figure>
												
												<a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>">
													<img src="Views/dashboard/uploads_images/<?php echo $post['imagenavant'];?>" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a style="" href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"><?php $str=strlen($post['titre']);
                                     if($str > 90){echo substr($post['titre'],0,90); echo " ..."; }else{echo $post['titre'];}?></a></h1>
												<div class="detail">
													<div class="category"><a href="javascript:void(0)"><?php echo $post['categorie'];?></a></div>
													<div class="time"><?php   require 'Views/dashboard/Control/coeur/minuterie.php'; ?></div>
												</div>
											</div>
										</div>
									</article>			
									
								<?php endforeach ?>	
									
									
								</div>
							</div>
						</div>
		        </div>
		      </div>
		      <div class="col-md-4 sidebar">
		        <aside>
		          <!-- <div class="aside-body">
		            <figure class="ads">
			            <a href="single.html">
			              ads content
			            </a>
		              <figcaption>Advertisement</figcaption>
		            </figure>
		          </div> -->
		        </aside>
		        <aside>
		          <h1 class="aside-title">Recent Post</h1>
		          <div class="aside-body">
		             <article class="article-fw">
		              <div class="inner">
		                <figure>
			                <a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $actu['id_publication'];?>">
											<img src="Views/dashboard/uploads_images/<?php echo $actu['imagenavant'];?>" alt="Sample Article">
										</a>
		                </figure>
		                <div class="details">
		                  <h4><a style="color:#000000;font-size:17px;" href="ensavoirplus?<?php echo $actu['slug'];?>&surlapulication=<?php echo $actu['id_publication'];?>"> <?php 
                                             echo substr($actu['titre'],0,200); echo " ...";?></a></h4>
		                  <p>
							<?php 
echo substr($actu['contenu'],0,200); echo " ...";?>
                            
						 </p>
		                  </p>
		                  <div class="detail">
		                    <div class="time"><?php   require 'Views/dashboard/Control/coeur/minuterie.php'; ?></div>
		                    <div class="category"><a ><?php echo $actu['categorie'];?></a></div>
		                  </div>
		                </div>
		              </div>
		            </article>
		           
		            
		            
		          </div>
		        </aside>
		        <aside>
		          <div class="aside-body">
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
		          </div>
		        </aside>
		      </div>
		    </div>
		  </div>
		</section>  











        <?php }
         else{?>
           <section class="not-found">
			<div class="container" id="canvas_id">
				<div class="row">
					<div class="col-md-12">
						<div class="code">
							404
						</div>
						<h1>Désolé</h1>
						<p class="lead">Aucun resulta n'eté touvé</p>
						<div class="search-form">							
														 
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

 ?>

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



























