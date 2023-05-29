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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configurations /</span> Nos contacts</h4>
            <div class="row container justify-content-center">
            
             <?php    
              require 'Views/dashboard/Control/coeur/db.php';    
              require 'Views/dashboard/Control/coeur/website_configurations.php';
               


                       if(isset($_POST['modifier_les_contacts'])){
                              update_configurations_contacts();   
                              $recup_configs= $db->query("SELECT * FROM configurations where id=2023");            
                              $configuration_x= $recup_configs->fetch();              
                        }
                               

?>

            </div>
            <div class="row justify-content-center">



              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Nos contacts</h5>
                  <small class="text-muted float-end">N'oublier pas d'enregister</small>
                </div>

                <div class="card-body ">
                  <form method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="mb-3 col-6">
                      <label class="form-label" for="basic-icon-default-fullname">Le contact le plus actif </label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default" class="input-group-text"><i class="bx bx-phone"></i></span>
                        <input type="text" name="contact" <?php if(isset($_POST['contact'])){ 
                            $myvalue=$_POST['contact'];?> 
                            value="<?php echo $myvalue ;
                            }
                            else{
                            ?> "
                          value= "<?php echo $configuration_x['telephone'] ;
                          } ?>"
                          class="form-control" id="basic-icon-default-fullname" placeholder="...">
                      </div>
                    </div>
                    <div class="mb-3 col-6">
                      <label class="form-label" for="basic-icon-default-fullname">legende </label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default" class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input type="text" name="email"  <?php if(isset($_POST['email'])){ 
                            $myvalue=$_POST['email'];?> 
                            value="<?php echo $myvalue ;
                            }
                            else{
                            ?> "
                          value= "<?php echo $configuration_x['email'] ;
                          } ?>"  class="form-control"
                          id="basic-icon-default-post" placeholder="ex : Webmaster">
                      </div>
                    </div>
                   </div> 
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">La page twitter de la radio</label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="bx bxl-twitter "></i></span>
                        <input type="text" name="twitter" <?php if(isset($_POST['twitter'])){ 
                            $myvalue=$_POST['twitter'];?> 
                            value="<?php echo $myvalue ;
                            }
                            else{
                            ?> "
                          value= "<?php echo $configuration_x['twitter'] ;
                          } ?>"
                          id="basic-icon-default-company" class="form-control" placeholder="un lien est requis">
                      </div>
                    </div>
                     <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">La page instagram de la radio</label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="bx bxl-instagram "></i></span>
                        <input type="text" name="instagram" <?php if(isset($_POST['instagram'])){ 
                            $myvalue=$_POST['instagram'];?> 
                            value="<?php echo $myvalue ;
                            }
                            else{
                            ?> "
                          value= "<?php echo $configuration_x['twitter'] ;
                          } ?>"
                          id="basic-icon-default-company" class="form-control" placeholder="un lien est requis">
                      </div>
                    </div>
                     <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">la page linkedin de la radio</label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="bx bxl-linkedin "></i></span>
                        <input type="text" name="linkedin" <?php if(isset($_POST['linkedin'])){ 
                            $myvalue=$_POST['linkedin'];?> 
                            value="<?php echo $myvalue ;
                            }
                            else{
                            ?> "
                          value= "<?php echo $configuration_x['twitter'] ;
                          } ?>"
                          id="basic-icon-default-company" class="form-control" placeholder="un lien est requis">
                      </div>
                    </div>
                     <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">la chaine youtube de la radio</label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="bx bxl-youtube "></i></span>
                        <input type="text" name="facebook" <?php if(isset($_POST['facebook'])){ 
                            $myvalue=$_POST['facebook'];?> 
                            value="<?php echo $myvalue ;
                            }
                            else{
                            ?> "
                          value= "<?php echo $configuration_x['facebook'] ;
                          } ?>"
                          id="basic-icon-default-company" class="form-control" placeholder="un lien est requis">
                      </div>
                    </div>
                       <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">adresse physique de la radio</label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="bx bx-buildings"></i></span>
                        <input type="text" name="adress" <?php if(isset($_POST['adress'])){ 
                            $myvalue=$_POST['adress'];?> 
                            value="<?php echo $myvalue ;
                            }
                            else{
                            ?> "
                          value= "<?php echo $configuration_x['adress'] ;
                          } ?>"
                          id="basic-icon-default-company" class="form-control" placeholder="un lien est requis">
                      </div>
                    </div>
                   
                    
                   
                    </div>
                      </div>
                    <div class="mt-3">

                      <button type="submit" name="modifier_les_contacts" class="btn btn-success" style="width:%"> Enregister </button>
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