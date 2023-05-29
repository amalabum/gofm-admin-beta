<?php
   require "Views/dashboard/admin_includes/configs.php";
   require 'Views/dashboard/admin_includes/head.php'; 
?>
<body>


<?php
  if(isset($_GET["podcast"])){
    $id= htmlspecialchars($_GET['podcast']);
      if (is_numeric($id)) {
        $myApi->Get("podcasts", $id);
        $resp = $myApi->response;  
        $podcast = $resp[0];
        
        ?>
<!-- debut content -->

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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">PODCASTS /</span> MODIFIER LE PODCAST</h4>
   <div class="row container justify-content-center">  
</div>  
            <div class="row justify-content-center"> 
               <?php 
                    if(isset($_POST['update'])){

                          if (isset($_FILES['cover'])) { 
                             $name=$_FILES['cover']["tmp_name"]; 
                            if(!empty($name)){
                              $animateurs->Data_design('update','podcasts',array('theme'=>'titre','categorie'=>'categorie','synthese'=>'details','cover'=>'cover'), $id);                   
                              $resp=$animateurs->response;
                              if($resp==2){
                              echo "<span class='success_response'>
                                Modifié avec success , couverture modifié !
                                </span>"; 
                              }
                              else{
                                echo "<span class='failed_response'>
                                        $resp
                                      </span>"; 
                              }       
                            }
                            else{
                               $animateurs->Data_design('update','podcasts',array('theme'=>'titre','categorie'=>'categorie','synthese'=>'details'), $id);                   
                               $resp=$animateurs->response;                         
                               if($resp==2){
                                 echo "<span class='success_response'>
                                  Modifié avec success, couverture intact!
                                </span>"; 
                                }
                                else{
                                  echo "<span class='failed_response'>
                                             $resp
                                       </span>"; 
                                }
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
                        <label for="exampleFormControlInput1" class="form-label">THEME</label>
                        <input type="text" name="titre"  value="<?php input_value(null,$default=$podcast['theme']); ?>"  class="form-control" id="exampleFormControlInput1" placeholder=" quel titre pour cette serie ?">
                      </div>                      
                     
                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Catégorie</label>
                        <select class="form-select" name="categorie" id="exampleFormControlSelect1" aria-label="Default select example">                          
                          <?php selected_input_value(null,$podcast['categorie']); ?>
                        </select>
                      </div>                

                      <div class="mt-4">
                        <label for="exampleFormControlTextarea1" class="form-label" >SYNTHESE</label>
                        <textarea name="details"  class="form-control editor" style="min-height: 476px;"><?php input_value(null,$default=$podcast['synthese']);?> 
                        </textarea>
                      </div>

                      <div class="mt-3">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="Views/API/Uploads/<?php input_value(null,$default=$podcast['cover']);?>" alt="avatar"
                              class="d-block rounded"  width="200px" id="uploadedAvatar">
                            <div class="button-wrapper">
                              <div class="mt-3 mb-2">
                                <label for="formFile" class="form-label">Remplacer La couverture par : </label>
                                <input class="form-control" name="cover" type="file" id="formFile">

                              </div>


                              <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>

                            <input class="form-control" type="text" hidden name="id_for_editing_team" value="<?php echo $edit_me['id'] ;?>" type="file" id="formFile">


                          </div>
                      </div>
                      
                    </div>
                    </div>
                    <button type="submit"  name="update" class="btn  btn-primary   mt-4">
                             Publier les modifications
                            </button>
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


<!-- end content -->
<?php
      }
      else{
        echo "<h3>Aucune publication n'a eté trouvée<h3>";
      }

  }
?>





<?php
   require 'Views/dashboard/admin_includes/js.php';
?>



</body>

</html>