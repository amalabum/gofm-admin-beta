<!DOCTYPE html>
 <?php

   require 'Views/includes/head.php';
?>

	<body class="skin-orange">
		
 <?php

   require 'Views/includes/header.php';
?>

		<section class="category">
		  <div class="container" id="canvas_id">
		    <div class="row">
		      <div class="col-md-8 text-left">
		        <div class="row">
		          <div class="col-md-12">        
		            <ol class="breadcrumb">
		              <li><a href="#">Home</a></li>
		              <li class="active"> <?php
   //recuperation des publications par categorie
if(isset($_GET['categorie'])){

    $categorie = $_GET['categorie'];
    echo $categorie;

	$recup_articlespar_categories= $db->query("SELECT * FROM publications where categorie='$categorie' ORDER BY id_publication DESC limit $start_from,$number_per_page"); 
while ($all_categories =  $recup_articlespar_categories->fetch()){
    $bycategories[]=$all_categories;
}
	$recup_article_categories= $db->query("SELECT * FROM publications where categorie='$categorie'"); 
while ($all_categorie =  $recup_article_categories->fetch()){
    $bycategorie_for_pagination[]=$all_categorie;
}
}


?></li>
		            </ol>
		            <h3 class="page-title">Categorie: <?php echo $categorie; ?> </h3>
		            <p class="page-subtitle">Toutes les publications sur dans la categorie <i> <?php echo $categorie; ?></i></p>
		          </div>
		        </div>
		        <hr>
		        <div class="row">




   <?php foreach ($bycategories as $post): ?>
									    
<article class="col-md-12 article-list">
								<div class="inner">
									<figure style="background:inherit;" class="col-sm-12">
										<a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>">
											<img src="Views/dashboard/uploads_images/<?php echo $post['imagenavant'];?>" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"><?php   require 'Views/dashboard/Control/coeur/minuterie.php'; ?></a>
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
												<div>Lire la su  ite</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
   <?php endforeach ?>
		          
		          




		          <div class="col-md-12 text-center">
		            <ul class="pagination">

    <?php $total_records=count($bycategorie_for_pagination);
                                       $total_per_page=ceil($total_records/$number_per_page);
                                        if($page >1){
                                            echo "<li class='prev'><a class='page-link'  href='categorie?categorie=".$categorie."&page=".($page-1)."'><i
                                            class='ion-ios-arrow-left'></i></a></li>"; 
                                        }
                                    
                                    for ($i=1; $i < $total_per_page ; $i++) { 
                                       
                                        
           if($page==$i){
echo "<li class='active'><a class='page-link' href='categorie?categorie=".$categorie."&page=".$i."'>".($i)."</a></li>";
 
		   }else{
echo "<li><a class='page-link' href='categorie?categorie=".$categorie."&page=".$i."'>".($i)."</a></li>";
                                          
		   }                               
                                         


                                       
                                    }
                                    if($i >$page){
                                            echo "<li class='next'><a class='page-link'  href='categorie?categorie=".$categorie."&page=".($page+1)."'><i
                                            class='ion-ios-arrow-right'></i></a></li>"; 
                                        }
                                  ?>


		    
		            </ul>
		         
		          </div>
		        </div>
		      </div>
		      <div class="col-md-4 sidebar" style="margin-top:30px;">
		        <aside style="display:none;">
		          <div class="aside-body">
		            <figure class="ads">
			            <a href="single.html">
			              <img src="Views/images/ad.png">
			            </a>
		              <figcaption>Advertisement</figcaption>
		            </figure>
		          </div>
		        </aside>
		        <aside>
		          <h1 class="aside-title">RECEMENT POSTé</h1>
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

  

		            <div class="line"></div>


					
		          
		            
		            
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