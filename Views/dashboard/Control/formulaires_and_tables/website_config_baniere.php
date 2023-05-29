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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configurations /</span> baniere</h4>
            <div class="row container justify-content-center">
            
             <?php    
              require 'Views/dashboard/Control/coeur/db.php';    
              require 'Views/dashboard/Control/coeur/website_configurations.php';
               


                       if(isset($_POST['modifier_la_baniere'])){
                              update_configurations_baniere();   
                              $recup_configs= $db->query("SELECT * FROM configurations where id=2023");            
                              $configuration_x= $recup_configs->fetch();              
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
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-fullname">Nom complet </label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" name="frequence_section" value="<?php echo $configuration_x['frequence_section'] ;?>"
                          class="form-control" id="basic-icon-default-fullname" placeholder="...">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-fullname">Poste OCCupé </label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" name="frequence_legende" value="<?php echo $configuration_x['frequence_legende'] ;?>" class="form-control"
                          id="basic-icon-default-post" placeholder="ex : Webmaster">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">Direct depuis youtube</label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="bx bxl-youtube "></i></span>
                        <input type="text" name="diffusion_youtube" value="<?php echo $configuration_x['lien_youtube'] ;?>"
                          id="basic-icon-default-company" class="form-control" placeholder="un lien est requis">
                      </div>
                    </div>
                    
                   
                    
                    <div class="mt-3">
                        <label for="formFile" name="ariereplan" class="form-label">Profil</label>

                        <div class="card-body mb-4">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="Views/dashboard/uploads_images/<?php echo $configuration_x['banier_img'] ;?>" alt="avatar"
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
                      </div>
                    <div class="mt-3">

                      <button type="submit" name="modifier_la_baniere" class="btn btn-success" style="width:%"> Enregister </button>
                    </div>
                  </form>
              
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