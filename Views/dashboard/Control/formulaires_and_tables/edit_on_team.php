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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Equipe /</span> Réctification</h4>
            <div class="row container justify-content-center">
              <?php         require 'Views/dashboard/Control/coeur/team.php';
                           if(isset($_POST['modifier_dans_la_team'])){
                              update_dans_la_team(); 
                              if(isset($_GET['id_mb'])){
      
      $id= htmlspecialchars($_GET['id_mb']);
      if (is_numeric($id)) { 
         
         $query= $db->query("SELECT * FROM team WHERE id='".$id."'");  
         $updatble= $query->fetch();
         //var_dump($updatble);
         if(!empty($updatble)){
            $edit_me=$updatble;
         }
         elseif(empty($updatble)){
          notification("danger","aucun agent ne correspond à votre recherche");
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



              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">informations personnelles</h5>
                  <small class="text-muted float-end">N'oublier pas d'enregister</small>
                </div>
                <div class="card-body ">
                  <form method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="mb-3 col-6">
                      <label class="form-label" for="basic-icon-default-fullname">Nom complet </label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" name="nom_complet" value="<?php echo $edit_me['nom'] ;?>"
                          class="form-control" id="basic-icon-default-fullname" placeholder="ex : kasongo Eliézer">
                      </div>
                    </div>
                    <div class="mb-3 col-6">
                      <label class="form-label" for="basic-icon-default-fullname">Poste OCCupé </label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" name="fonction" value="<?php echo $edit_me['fonction'] ;?>" class="form-control"
                          id="basic-icon-default-post" placeholder="ex : Webmaster">
                      </div>
                    </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">Lien vers mon twitter</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="bx bxl-twitter mb-2"></i></span>
                        <input type="text" name="twitter" value="<?php echo $edit_me['twitter'] ;?>"
                          id="basic-icon-default-company" class="form-control" placeholder="lien vers mon twitter"
                          aria-label="Lien vers mon twitter">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">Lien vers mon instagram</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="bx bxl-instagram mb-2"></i></span>
                        <input type="text" name="instagram" value="<?php echo $edit_me['instagram'] ;?>"
                          class="form-control" placeholder="lien vers mon instagram"
                          aria-label="Lien vers mon instagram">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">Lien vers mon facebook</label>
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bxl-facebook mb-2"></i></span>
                        <input type="text" name="linkedin" value="<?php echo $edit_me['linkedin'] ;?>"
                          class="form-control" placeholder="lien vers mon facebook">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-email">Email</label>
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input type="text" name="email" value="<?php echo $edit_me['email'] ;?>"
                          id="basic-icon-default-email" class="form-control" placeholder="eliezer">
                        <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                      </div>
                      <div class="mt-3">
                        <label for="formFile" name="profil" class="form-label">Profil</label>

                        <div class="card-body mb-4">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="Views/dashboard/uploads_images/<?php echo $edit_me['profil'] ;?>" alt="avatar"
                              class="d-block rounded"  width="300px" id="uploadedAvatar">
                            <div class="button-wrapper">
                              <div class="mt-3 mb-2">
                                <label for="formFile" class="form-label">Remplacer par : </label>
                                <input class="form-control" name="pictures" type="file" id="formFile">
                              </div>


                              <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>

                            <input class="form-control" type="text" hidden name="id_for_editing_team" value="<?php echo $edit_me['id'] ;?>" type="file" id="formFile">


                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">

                      <button type="submit" name="modifier_dans_la_team" class="btn btn-primary" style="width:100%"> Enregister </button>
                    </div>
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