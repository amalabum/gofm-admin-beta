<?php
   require "Views/dashboard/admin_includes/configs.php";
   require 'Views/dashboard/admin_includes/head.php';
    
?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-fluid layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <?php
   require 'Views/dashboard/admin_includes/sidebar.php';
?>
      <!-- Layout container -->
      <div class="layout-page">

        <?php
   require 'Views/dashboard/admin_includes/header.php';
?>

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                <?php
                  if (isset($_GET['parent'])){
                  echo "<h4 class='fw-bold py-3 mb-4'> <span class='text-muted fw-light'>PODCASTS /</span> NOUVELLE EPISODE</h4>"  ;    
                  }
                  else{
                  echo "<h4 class='fw-bold py-3 mb-4'><span class='text-muted fw-light'>PODCASTS /</span> CREER UN PODCAST</h4>" ;                  
                  }
                ?>           
            <div class="row container justify-content-center">  
</div>  
            <div class="row justify-content-center"> 
               <?php 
                  if(isset($_POST['save_serie']) || isset($_POST['save_episode'])){

                    if(isset($_FILES['audio']) && isset($_FILES['cover'])){
                     $audiosize=$_FILES['audio']['size'];
                     $audio = $_FILES['audio']['name'];
                     $cover = $_FILES['cover']['name'];

                     $audio_ext=pathinfo($audio,PATHINFO_EXTENSION);
                     $cover_ext=pathinfo($cover,PATHINFO_EXTENSION);

                     $accepted_audio_ext= array ('mp3','MP3','mp4','MP4');
                     $accepted_cover_ext= array ('jpeg','jpg','JPEG','JPG','PNG','png','GIF','gif');

                      if(in_array($audio_ext,$accepted_audio_ext) &&  in_array($cover_ext,$accepted_cover_ext) && $audiosize < 41943040)  {  
                   
                          if (isset($_GET['parent'])){
                          $animateurs->Data_design('insert','podcasts',array('theme'=>'titre','parent'=>'parent','audio'=>'audio','synthese'=>'details','cover'=>'cover'));                   
                      }
                      elseif($audiosize < 41943040){
                           echo "<span class='failed_response'>
                               l'audioque vous venez de choisir pèse 
                           </span>"; 
                          
                      }
                      else{
                          $animateurs->Data_design('insert','podcasts',array('theme'=>'titre','categorie'=>'categorie','audio'=>'audio','synthese'=>'details','cover'=>'cover'));                   
                      }
                                        
                        $resp=$animateurs->response;

                         if($resp==1){
                            echo "<span class='success_response'>
                              Ajouté avec success !
                            </span>"; 
                          }
                          elseif($resp==2){
                             echo "<span class='success_response'>
                                    Modifié avec success !
                                  </span>"; 
                          }
                          else{
                          echo "<span class='failed_response'>
                           $resp
                           </span>"; 
                          }
                      }
                      else{
                           echo "<span class='failed_response'>
                              rassurez-vous d'voir choisi un audio pour le podcast et une image pour la couverture                          
                           </span>"; 
                      }

                       
                    }
                        
                  }                 
          ?>     
              <div class="col-md-12">
                  <div class="card mb-0">
                    <h5 class="card-header"></h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <form method="post" enctype="multipart/form-data">
                        <label for="exampleFormControlInput1" class="form-label">Titre de l'épisode</label>
                        <input type="text" name="titre"  <?php if(isset($_POST['titre'])){ $myvalue=$_POST['titre'];?>value="<?php echo $myvalue ;} ?>"  class="form-control" id="exampleFormControlInput1" placeholder=" quel titre pour cette épisode ?">
                      </div>                      
                      <?php
                        if (isset($_GET['parent'])){
                         echo ' <div class="mb-3 d-none">                        
                        <label for="exampleFormControlSelect1" class="form-label">Catégorie</label>
                        <select class="form-select" name="categorie" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="Politique">Politique</option>
                          <option selected value="Actualité">Actualité</option>
                          <option value="Education">Education</option>
                          <option value="Education">Business</option>
                        </select>
                        </div> ';
                        }
                        else{
                         echo ' <div class="mb-3">                        
                        <label for="exampleFormControlSelect1" class="form-label">Catégorie</label>
                        <select class="form-select" name="categorie" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="Politique">Politique</option>
                          <option value="Actualité">Actualité</option>
                          <option value="Education">Education</option>
                          <option value="Business">Business</option>
                        </select>
                        </div> ';
                        }
                        ?>  
                        <?php
                        if (isset($_GET['parent'])){
                       
                         $parent=$_GET['parent'];
                         echo '                      
                            <input type="text" name="parent" class="d-none" style="display:none;" value="'.$parent.'"> 
                             ';
                        }
                        else{
                            $value=0;
                           echo '<input type="text" name="parent" class="d-none"  value="'.$value.'">';
                        } 
                                                
                             
                      
                                           
                             ?>  

                             
                         
                         
                                                            
                                             
                                   
                      <div class="mt-3">
                        <label for="formFile"  class="form-label">AUDIO</label>
                        <input class="form-control" name="audio" type="file" id="formFile">
                      </div>
                      <div class="mt-4">
                        <label for="exampleFormControlTextarea1" class="form-label" >SYNTHESE</label>
                        <textarea name="details"  class="form-control editor" style="min-height: 476px;" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laudantium nesciunt aliquam quos harum, sed officia id? Voluptas ut voluptatibus dignissimos mollitia corporis, expedita iste maiores dolores, excepturi neque sequi!">  
                        <?php if(isset($_POST['details'])){ $myvalue=$_POST['details'];?> <?php echo $myvalue ;} ?> 
                        </textarea>
                      </div>

                      <div class="mt-3">
                        <label for="formFile"  class="form-label">Image De Couverture</label>
                        <input class="form-control" name="cover" type="file" id="formFile">
                      </div>
                      
                    </div>
                    </div>
                    <?php
                     if (isset($_GET['parent'])){
                         echo '<button type="submit"  name="save_serie" class="btn  btn-primary   mt-4">
                             Publier l\'épisode
                            </button>';
                        }
                        else{
                        
                            echo'<button type="submit"  name="save_episode" class="btn  btn-primary   mt-4">
                             Publier la serie
                            </button>';

                        }
                    ?>
              
                    </form>
                    
                  </div>
                </div>      
              

              
            
            </div>
          </div>
        

          <!-- Footer -->
         
<?php
   require 'Views/dashboard/admin_includes/footer.php';
?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
    
      </div>
  
    </div>

  
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>


<?php
   require 'Views/dashboard/admin_includes/js.php';
?>


</body>

</html>