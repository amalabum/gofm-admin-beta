
<header class="primary">

	
		<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="home">
									<img src="Views/dashboard/assets/logh-removebg-preview.png" alt="Go fm Logo" style="width:140px;">
								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" method="get" action="resultat-de-la-recherche" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="keyword" class="form-control" placeholder="Rechercher..." style="border-radius:20px 0px 0px 20px;">									
										<div class="input-group-btn">
											<button class="btn btn-primary" style=" width:100px;border-radius:0px 20px 20px 0px;"><i class="ion-search" ></i></button>
										</div>										
									</div>
									
							  
								
								</div>
								<div class="help-block " style="">
									<div>Plus consultés :</div>
									<ul>

									    


									       <?php 
                                         foreach ($categories as $category):
											
                                        ?>
									    <li><a href="categorie?categorie=<?php echo $category['categorie'];?>"><?php echo $category['categorie']?></a></li>
										<?php
                                         endforeach
                                        ?>	
										
										
										
									</ul>
								</div>
								
								
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right">
							<ul class="social trp " id="socialstr" style="margin-top:20px;">
										<li>
										<a href="<?php echo $configuration_x['facebook'];?>" class="facebook" style="border-radius:50%;">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="<?php echo $configuration_x['twitter'];?>" class="twitter" style="border-radius:50%;">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-twitter-outline"></i>
										</a>
									</li>
									<li>
										<a href="<?php echo $configuration_x['lien_youtube'];?>" class="youtube" style="border-radius:50%;">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>				
									
									
												
									
									
								</ul>

							<!-- <ul class="nav-icons">
								<li><a href="newsletter"><i class="ion-person-add"></i><div>S'abonner</div></a></li>
						    </ul> -->
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="home">
							<img src="Views/dashboard/assets/logh-removebg-preview.png" alt="Logo Gofm" widht="60px">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>
							<li class="for-tablet"><a href="login.html">Login</a></li>
							<li class="for-tablet"><a href="register.html">Register</a></li>



							<li><a href="home">Accueil</a></li>
							<li class="dropdown magz-dropdown">
								<a href="categorie">Actualité <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									     <?php 
                                         foreach ($categories as $category):
											
                                        ?>
									    <li><a href="categorie?categorie=<?php echo $category['categorie'];?>"><?php echo $category['categorie']?></a></li>
										<?php
                                         endforeach
                                        ?>	
																
								</ul>
							</li>
							 <?php 
                                         foreach ($categories_recents as $category):
											
                                        ?>
									    <li><a href="categorie?categorie=<?php echo $category['categorie'];?>"><?php echo $category['categorie']?></a></li>
										<?php
                                         endforeach
                                        ?>						

						
							
							
						
							<li class="dropdown magz-dropdown magz-dropdown-megamenu" style="display:none;"><a href="#">Voir aussi <i class="ion-ios-arrow-right"></i></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<h2 class="megamenu-title">Internationnal</h2>
												<ul class="vertical-menu">
													<li><a href="#">Example 1</a></li>
													<li><a href="#">Example 2</a></li>
													<li><a href="#">Example 3</a></li>
													<li><a href="#">Example 4</a></li>
													<li><a href="#">Example 5</a></li>
												</ul>
											</div>
											<div class="col-md-3">
												<h2 class="megamenu-title">Nationnal</h2>
												<ul class="vertical-menu">
													<li><a href="#">Example 6</a></li>
													<li><a href="#">Example 7</a></li>
													<li><a href="#">Example 8</a></li>
													<li><a href="#">Example 9</a></li>
													<li><a href="#">Example 10</a></li>
												</ul>
											</div>
											<div class="col-md-3">
												<h2 class="megamenu-title">RDC</h2>
												<ul class="vertical-menu">
													<li><a href="#">Example 11</a></li>
													<li><a href="#">Example 12</a></li>
													<li><a href="#">Example 13</a></li>
													<li><a href="#">Example 14</a></li>
													<li><a href="#">Example 15</a></li>
												</ul>
											</div>
											<div class="col-md-3">
												<h2 class="megamenu-title">Nord-Kivu</h2>
												<ul class="vertical-menu">
													<li><a href="#">Example 16</a></li>
													<li><a href="#">Example 17</a></li>
													<li><a href="#">Example 18</a></li>
													<li><a href="#">Example 19</a></li>
													<li><a href="#">Example 20</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li><a href="qui-sommes-nous">Qui sommes-nous ?</a></li>
						
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>
		
 <?php


  