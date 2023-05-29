<?php
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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Articles /</span> Modification</h4>
   <div class="row container justify-content-center">  
   <?php         require 'Views/dashboard/Control/coeur/features.php';
                            if(isset($_POST['modifier'])){
                              update_article();
                              
                              if(isset($_GET['ilqvkdvvufhf'])){
      
      $id= htmlspecialchars($_GET['ilqvkdvvufhf']);
      if (is_numeric($id)) { 
         
         $query= $db->query("SELECT * FROM publications WHERE id_publication='".$id."'");  
         $updatble= $query->fetch();
         //var_dump($updatble);
         if(!empty($updatble)){
            $edit_me=$updatble;
         }
         elseif(empty($updatble)){
          notification("danger","aucune publication ne correspond à votre recherche");
         }
      }
      elseif(!is_int($id)){      
        notification("danger","aucun resultat n'a eté trouvé");
      }
      
    }
                            }
                               

?>  

</div>  
            <div class="row justify-content-center">  
                        
              <div class="col-md-12">
                  <div class="card mb-4">
                   
                    <div class="card-body">
                      <div class="mb-3">
                        <form method="post" enctype="multipart/form-data">
                        <label for="exampleFormControlInput1" class="form-label">Un sujet pour l'aricle</label>
                        <input type="text" name="titre" value="<?php echo $edit_me['titre'] ;?>"  class="form-control" id="exampleFormControlInput1" placeholder="ex : Pourquoi l'existence de la radio Go fm ?">
                      </div>                      
                     
                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Une categorie</label>
                        <select class="form-select" name="categorie" id="exampleFormControlSelect1" aria-label="Default select example">
                          
                          <?php if(!empty($edit_me['categorie'])){ ?>
                            <option selected value="<?php echo $edit_me['categorie'];?>"><?php echo $edit_me['categorie'];?></option>                          
                           <?php
                           }                             
                           ?>                 
                          <option value="Actualité">Actualité</option>
                          <option value="Politique">Politique</option>                          
                          <option value="Education">Education</option>
                          <option value="Business">Business</option>
                        </select>
                      </div>                     
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Slug</label>
                        <input type="text" name="slug"  value="<?php echo $edit_me['slug'] ;?>"  class="form-control" id="exampleFormControlInput1" placeholder="ex : Pourquoi-l'existence-de-la-radio-Go-fm ?">
                      </div>  
                      <div>
                        <label for="exampleFormControlTextarea1" class="form-label" >Contenu de l'ARTICLE</label>
                        <textarea name="details" class="form-control editor"  style="min-height: 876px;" placeholder=" Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laudantium nesciunt aliquam quos harum, sed officia id? Voluptas ut voluptatibus dignissimos mollitia corporis, expedita iste maiores dolores, excepturi neque sequi!">
                           <?php echo $edit_me['contenu'];?>
                        </textarea>
                      </div>

                      <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="Views/dashboard/uploads_images/<?php echo $edit_me['imagenavant'] ;?>" alt="image mise en avant" class="d-block rounded"  width="300px" id="uploadedAvatar">
                        <div class="button-wrapper">
                         
                         
                            
                              <div class="mt-3 mb-2">
                        <label for="formFile"  class="form-label">Remplacer par : </label>
                        <input class="form-control" name="pictures" type="file" id="formFile">                      
                        
                        </div>
                        
                      

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <button type="submit"  name="modifier" class="btn btn-primary  col-12">
                             Publier les modifications
                            </button>
                    </form>
                    </div>
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