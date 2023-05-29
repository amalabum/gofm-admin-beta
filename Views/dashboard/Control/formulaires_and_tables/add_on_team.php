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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Equipe /</span> Ajouter Un colegue</h4>
   <div class="row container justify-content-center">  
                <?php       
                 require 'Views/dashboard/Control/coeur/team.php';
                      if(isset($_POST['add_on_team'])){
                              ajouter_dans_l_equipe();  
                                                
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
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" name="nom_complet"  <?php if(isset($_POST['nom_complet'])){ $myvalue=$_POST['nom_complet'];?>value="<?php echo $myvalue ;} ?>" class="form-control" id="basic-icon-default-fullname" placeholder="ex : kasongo Eliézer"  >
                          </div>
                        </div>
                         <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Poste OCCupé </label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" name="fonction"  <?php if(isset($_POST['fonction'])){ $myvalue=$_POST['fonction'];?>value="<?php echo $myvalue ;} ?>" class="form-control" id="basic-icon-default-post" placeholder="ex : Webmaster" >
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Lien vers mon twitter</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bxl-twitter mb-2"></i></span>
                            <input type="text"  name="twitter" <?php if(isset($_POST['twitter'])){ $myvalue=$_POST['twitter'];?>value="<?php echo $myvalue ;} ?>" id="basic-icon-default-company" class="form-control" placeholder="lien vers mon twitter" aria-label="Lien vers mon twitter" >
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Lien vers mon instagram</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bxl-instagram mb-2"></i></span>
                            <input type="text" name="instagram" <?php if(isset($_POST['instagram'])){ $myvalue=$_POST['instagram'];?>value="<?php echo $myvalue ;} ?>" class="form-control" placeholder="lien vers mon instagram" aria-label="Lien vers mon instagram" >
                          </div>
                        </div>
                          <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Lien vers mon facebook</label>
                          <div class="input-group input-group-merge">
                            <span  class="input-group-text"><i class="bx bxl-linkedin mb-2"></i></span>
                            <input type="text" name="linkedin" <?php if(isset($_POST['linkedin'])){ $myvalue=$_POST['linkedin'];?>value="<?php echo $myvalue ;} ?>" class="form-control" placeholder="lien vers mon facebook">
                          </div>
                        </div>                         
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Email</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input type="text" name="email" <?php if(isset($_POST['email'])){ $myvalue=$_POST['email'];?>value="<?php echo $myvalue ;} ?>"  id="basic-icon-default-email" class="form-control" placeholder="eliezer" >
                            <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                          </div>
                        <div class="mt-3">
                        <label for="formFile" name="profil"  class="form-label">Profil</label>
                        <input class="form-control" name="pictures" type="file" id="formFile">
                      </div>
                          
                        </div>
                       
                       
                        
                        <button type="submit" name="add_on_team" class="btn btn-primary" style="width:100%"> Enregister </button>
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