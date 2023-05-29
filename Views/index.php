<!DOCTYPE html>
 <?php
   require 'Views/includes/head.php';
?>

	<body class="skin-orange">
		
 <?php
   require 'Views/includes/header.php';
?>
		<section class="home">
			<div class="container" id="canvas_id">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">

						<!-- <div class="headline">
							<div class="nav" id="headline-nav">
								<a class="left carousel-control" role="button" data-slide="prev">
									<span class="ion-ios-arrow-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" role="button" data-slide="next">
									<span class="ion-ios-arrow-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="owl-carousel owl-theme" id="headline">							
								<div class="item">
									<a href="#"><div class="badge">Tip!</div> Vestibulum ante ipsum primis in faucibus orci</a>
								</div>
								<div class="item">
									<a href="#">Ut rutrum sodales mauris ut suscipit</a>
								</div>
							</div>
						</div> -->

						<div class="owl-carousel owl-theme slide" id="featured">
							<?php foreach ($posts_populars as $post): ?>
						
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="Views/dashboard/uploads_images/<?php echo $post['imagenavant'];?>" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="javascript:void(0)"><?php echo $post['categorie'];?></a></div>
										<h1><a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"><?php echo $post['titre'];?></a></h1>
										<div class="time"><?php   require 'Views/dashboard/Control/coeur/minuterie.php'; ?></div>
									</div>
								</article>
							</div>
							<?php endforeach ?>	
						
							
							
						</div>














						<div class="line">
							<div>plus recent</div>
						</div>
						<div class="row">


						   <?php foreach ($posts_populars as $post): ?>

							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12">
										<div class="inner">
											  <div class="date" style="
  position :absolute;
  top:15px;
  right:15px;
  color:#FFFFFF;
  font-size:14px;
  padding:3px 9px ;
  font-family:century;
  background:#850a0a;
  border-radius:1px 0px 0px 1px;
    
">
                                         <?php echo "GO FM"//  require 'Views/dashboard/Control/coeur/minuterie.php'; ?>                          
                                   </div>
											<figure>
												<a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"">
													<img src="Views/dashboard/uploads_images/<?php echo $post['imagenavant'];?>" alt="">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time"><?php require 'Views/dashboard/Control/coeur/minuterie.php'; ?> , </div>
													<div class="category"><a href="javascript:void(0)"><?php echo $post['categorie'];?></a></div>
												</div>
												<h4 ><a style="color:#000000;font-size:17px;" href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"><?php $str=strlen($post['titre']);
                                     if($str > 90){echo substr($post['titre'],0,90); echo " ..."; }else{echo $post['titre'];}?></a></h4>
												<p><?php //echo substr($post['contenu'],0,100);?></p>
												<footer>
													<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
													<a class="btn btn-primary more" href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>">
														<div>Lire l'article</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>									
								</div>
							</div> 
						   <?php endforeach ?>	
							
						</div>


















						<div class="banner">
							<a href="#">
								<img src="Views/images/ads.png" alt="Sample Article">
							</a>
						</div>
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
						<div class="line top">
							<div>Voir aussi</div>
						</div>
						<div class="row">
							 <?php foreach ($posts_populars as $post): ?>
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
                                     if($str > 160){echo substr($post['titre'],0,160); echo " ..."; }else{echo $post['titre'];}?></a></h1>
									
										<footer>
											<a href="javascript:viod(0)" class="love">GO FM- 95.8 MHZ</a>
											<a class="btn btn-primary more" href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>">
												<div>Consulter</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							
		<?php endforeach ?>	
						</div>
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						<!-- <div class="sidebar-title for-tablet">Sidebar</div> -->
						<aside>
							<div class="aside-body">
								<div class="featured-author" style="display:nne;"> 
									<div class="featured-author-inner">
										<div class="featured-author-cover" style="background-image: url('Views/images/news/img15.jpg');">
											<div class="badges">
												<div class="badge-item"><i class="ion-star"></i> Featured</div>
											</div>
											
										</div>
										<!-- nombre des pots -->
									</div>
								</div>
							</div>
						</aside>
						<aside>
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
							<div class="aside-body">
								<form class="newsletter">
									<div class="icon">
										<i class="ion-ios-email-outline"></i>
										<h1>Newsletter</h1>
									</div>
									<div class="input-group">
										<input type="email" class="form-control email" placeholder="Votre adresse mail">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
										</div>
									</div>
									<p>Restez à jour en souscrivant à  notre newsletter </p>
								</form>
							</div>
						</aside>
						
						<aside>
			
							<div class="aside-body">
							<iframe width="100%" height="240px"  src="https://www.youtube.com/embed/A9sHJnqSers" title="RDC : les premiers soldats kényans sont arrivés à Goma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</aside>
						
					</div>
				</div>
			</div>
		</section>

		<section class="best-of-the-week">
			<!-- nouvelles du semaine -->
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