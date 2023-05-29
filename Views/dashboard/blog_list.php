 <div class="col-lg-8" style="margin-top:-15px;">
                    <div class="row">                        
                         <div class="containerListeBox">                            
                        <?php
                        
   

       if (isset($_GET['page'])) {
        $page =$_GET['page'];
       }
       else{
        $page =1;
       }
       $number_per_page=05;
       $start_from=($page-1)*05;

 
   require 'Views/dashboard/Control/coeur/recup_data/configurations.php';
          $recup_data= $db->query("SELECT * FROM publications ORDER BY id_publication DESC limit $start_from,$number_per_page "); 
while ($all_posts =  $recup_data->fetch()){
    $posts[]=$all_posts;
}
                        
                        $i=0; foreach ($posts as $post):
                            $i++; 
                            ?>                       


  
                        <div class="Cards1  col-6 row">
                            <div class="card_img">
                                  <div class="date">
                                         <?php   require 'Views/dashboard/Control/coeur/minuterie.php'; ?>                          
                                   </div>
                            <img src="Views/dashboard/uploads_images/<?php echo $post['imagenavant'];?>" width="100%" alt="">
                            </div>
                            <div class="textcontainer">  
                                                 <p>
                            <ul class="blog-det-meta">
                                <li><i class="far fa-user"></i>
                                    <p style="color:#D2D2D2;">Par Gofm - 95.8 Mhz </p>
                                </li>                         
                            </ul>
                              </p>  
                             
                               <ul class="blog-det-meta">
                                <li>
                                     
                                <a style="color:#00000F; font-size:15px;" href="ensavoirplus?<?php
                                     echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>">
                                     <?php   
                                                                  
                                     $str=strlen($post['titre']);
                                     if($str > 80){echo substr($post['titre'],0,80); echo " ..."; }else{echo $post['titre'];echo".";}
                                    ?></a>
                                </li>                         
                            </ul>  

                              </p>  
                               <p> 
                               <ul class="blog-det-meta">
                                <li style="margin-top:10px;">
                                   <br> 
                               <div id="morBtnDiv "> <a href="ensavoirplus?<?php
                                     echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>" class="moreBtn">
                                  Lire la suite</a>
                               </div>
                                </li>                         
                            </ul>     </p>                
                              
                                 
                              
              
                            </div>
                            
                          </div> 
                      
                                            
                        <?php endforeach ?>
                         </div>
                    </div>
                      
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                 <?php $total_records=count($posts_for_pagination);
                                       $total_per_page=ceil($total_records/$number_per_page);
                                        if($page >1){
                                            echo "<li class='page-item'><a class='page-link' style='padding-top:11px;' href='blog?page=".($page-1)."'><i
                                            class='fas fa-long-arrow-alt-left'></i></a></li>"; 
                                        }
                                    
                                    for ($i=1; $i < $total_per_page ; $i++) { 
                                       
                                        
                                          
                                         
echo "<li class='page-item '><a class='page-link' href='blog?page=".$i."'>".($i)."</a></li>";
                                          

                                       
                                    }
                                    if($i >$page){
                                            echo "<li class='page-item'><a class='page-link' style='padding-top:11px;' href='blog?page=".($page+1)."'><i
                                            class='fas fa-long-arrow-alt-right'></i></a></li>"; 
                                        }
                                  ?>
                             
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row ">
                        <div class="col-lg-12 d-none">
                            <form class="blog-src"><input type="text" placeholder="Search..."><button><i
                                        class="fas fa-search"></i></button></form>
                        </div>
                        <div class="col-md-7 col-lg-12">
                            <div class="blog-filter">
                                <h3 style="visibility:hidden;">Voir aussi </h3>
                                <ul class="blog-suggest">
                                    <li>
                                    <div class="col-lg-12">
                            <div class="blog-ad"><a href="#"><img src="Views/img/ad-banner.jpg" alt="ad-banner"></a></div>
                        </div>
                                  </li>
                                   <h3>Voir aussi </h3>
                                          <?php
                                       

                              
                                   foreach ($posts_populars as $post): ?>                             

                    <li>    
                                        <div class="suggest-img"><a href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"><img src="Views/dashboard/uploads_images/<?php echo $post['imagenavant'];?>"
                                                    alt="suggest-1"></a></div>
                                        <div class="suggest-content">
                                            <div class="suggest-title">
                                                <h6 ><a style="color:#000000;font-family:times;" href="ensavoirplus?<?php echo $post['slug'];?>&surlapulication=<?php echo $post['id_publication'];?>"><?php   $str=strlen($post['titre']);
                                     if($str > 70){echo substr($post['titre'],0,70); echo " ..."; }else{echo $post['titre'];}?></a>
                                                </h6>
                                            </div>
                                            <div class="suggest-meta">
                                                <div class="suggest-date"><i class="far fa-calendar-alt"></i>
                                                    <span style="color:#B8B8B8;font-family:times;"><?php   require 'Views/dashboard/Control/coeur/minuterie.php'; ?> </span>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </li>

                        <?php endforeach;
                                  ?>           
                                          
                                          
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-6 col-lg-12">
                            <div class="blog-filter">
                                <h3>Suivez nous</h3>
                                <ul class="blog-icon">
                                    
                                    <li><a class="icon icon-inline" href="<?php echo $configuration_x['twitter'];?>"><i style="font-size:22px;" class="bx bxl-twitter mb-3"></i></a></li>
                            <li><a class="icon icon-inline" href="<?php echo $configuration_x['linkedin'];?>"><i style="font-size:22px;" class="bx bxl-linkedin mb-3"></i></a></li>
                            <li><a class="icon icon-inline" href="<?php echo $configuration_x['instagram'];?>"><i style="font-size:22px;" class="bx bxl-instagram mb-3"></i></a></li>
                            <li><a class="icon icon-inline" href="<?php echo $configuration_x['lien_youtube'];?>"><i style="font-size:22px;" class="bx bxl-youtube mb-3"></i></i></a></li>
                                 
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12">
                            <div class="blog-ad"><a href="#"><img src="Views/img/ad-banner.jpg" alt="ad-banner"></a></div>
                        </div> -->
                    </div>
                </div>