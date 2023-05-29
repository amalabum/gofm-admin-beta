<?php 
  $db= new PDO('mysql:host=localhost;dbname=Gofm_db','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
//recuperation des publications

  $id_post_actif= $db->query("SELECT * FROM configurations  where id=2023"); 
  $myId=$id_post_actif->fetch();
  $actif_post=$myId['actif_pub'];


$recup_data= $db->query("SELECT * FROM comments where id_publication=$actif_post"); 
while ($all_comments =  $recup_data->fetch()){
    $commentaires[]=$all_comments;
 }

 if(empty($commentaires)){
    echo '<h4>Soyer le premier à laiser un commentaire !</h4>' ;
 }
 
 elseif(!empty($commentaires)){
    echo  " <h3>Commentaires</h3>";
    foreach($commentaires as $comment): ?>
                                <li>
                              <div class="comment">
                                  <div class="comment-img" width="90px">
                                    <i
                                            class="fas fa-user" style=""></i>
                                    <!-- <a href="#"><img src="Views/img/comment-1.jpg"
                                                alt="comment-1" width="90px"></a> 
                                    -->
                                    </div>             
                                    <div class="comment-content">
                                        <h4> Par  <?php echo $comment['nom'] ?> </h4>  <span class="badge bg-label-warning me-1 btn-danger"><?php echo "visiteur";//$comment['categorie'];?></span>
                                <span><?php echo $comment['dates'] ?></span>                                       
                                        <p><?php echo $comment['commentaire'] ?></p>
                                    </div>                                    
                                </div>                                
                             </li> 

   <?php              
 endforeach ;  
   echo " <hr> ";    
 } 
 


               
?>

              