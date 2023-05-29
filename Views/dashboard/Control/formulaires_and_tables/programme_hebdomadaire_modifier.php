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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Programmes /</span> Rectification </h4>
            <div class="row container justify-content-center">

              <?php    
              require 'Views/dashboard/Control/coeur/db.php';    
              require 'Views/dashboard/Control/coeur/programmes.php';
              require 'Views/dashboard/Control/coeur/form_generator.php';
              $partners_forms= new Form_generator();             

                if(isset($_POST['ajouter_le_programme'])){
                       modification_programme();   
                  // Modification geting id and table

        
      }
            ?>

            </div>
            <div class="row justify-content-center">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">modification du programme</h5>
                  <small class="text-muted float-end">N'oublier pas d'enregister</small>
                </div>
                <div class="card-body ">
                  <form method="post" enctype="multipart/form-data">


                    <div class="cs-form col-12 mb-3">
                      <label for="exampleFormControlSelect1" class="form-label">titre du programme</label>
                     <input type="text" name="titre_prog" class="form-control" placeholder="un titre pour le programme" value="<?php echo $edit_me['titre'];?>" />
                  </div> 
                <div class="row">
                  <div class="cs-form col-4">  
                             <label for="exampleFormControlSelect1" class="form-label">Chaque</label>   
                   <select class="form-select" name="date_prog" id="exampleFormControlSelect1" aria-label="Default select example" require>
                             
                             <option selected value="<?php echo $table;?>"><?php echo substr($table,10);?></option>
                             <option value="programme_lundi">lundi</option>
                             <option value="programme_mardi">Mardi</option>
                             <option value="programme_mercredi">Mercredi</option>
                             <option value="programme_jeudi">jeudi</option>
                             <option value="programme_vendredi">Vendredi</option>
                             <option value="programme_samedi">Samedi</option>
                             <option hidden value="programme_dimanche">Dimance</option>
                        </select>
                  </div>
                  <div class="cs-form col-2">
                      <label for="exampleFormControlSelect1" class="form-label">à partir de :</label>
                     <input type="time" name="debut_prog" class="form-control" value="<?php echo $edit_me['debut'];?>" />
                  </div>  
                  <div class="cs-form col-2">  
                             <label for="exampleFormControlSelect1" class="form-label">AM ou PM ?</label>   
                   <select class="form-select" name="merid_1" id="exampleFormControlSelect1" aria-label="Default select example" require>
                          <option selected value="<?php echo $edit_me['meridien_debut'];?>"><?php echo $edit_me['meridien_debut'];?></option>
                          <option value="AM">AM</option>
                          <option value="PM">PM</option>
                          
                        </select>
                  </div>
                  <div class="cs-form col-2">
                    <label for="exampleFormControlSelect1" class="form-label"> jusqu'à :</label>                    
                     <input type="time" name="fin_prog" class="form-control" value="<?php echo $edit_me['fin'];?>" />
                  </div>
                    <div class="cs-form col-2"> 
                          <label for="exampleFormControlSelect1" class="form-label">AM ou PM ?</label>
                                  
                   <select class="form-select" name="merid_2" id="exampleFormControlSelect1" aria-label="Default select example" require>
                          <option selected value="<?php echo $edit_me['meridien_debut'];?>"><?php echo $edit_me['meridien_fin'];?></option>
                          <option  value="AM">AM</option>
                          <option value="PM">PM</option>
                          
                        </select>
                  </div>
                </div>   
                <div class="row">
                      <div class="mt-3 mb-3 col-6">
                        <label for="exampleFormControlSelect1" class="form-label">Animateur</label>
                        <select class="form-select" name="animateur_1" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option selected value="<?php  if(!empty($edit_me['animateur1'])){echo $edit_me['animateur1'];}?>"><?php   if(!empty($animateur1['nom'])){echo $animateur1['nom'];}else echo "aucun";?></option>                          
                          
                          <?php foreach($team as $animateur):?>
                                  <option value=<?php echo $animateur['id'];?>><?php echo $animateur['nom'];?></option>
                          <?php endforeach?>
                          
                      </select>
                      </div> 
                      <div class="mt-3 mb-3 col-6">
                        <label for="exampleFormControlSelect1" class="form-label">Accompagné par :</label>
                        <select class="form-select" name="animateur_2" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected value="<?php  if(!empty($edit_me['animateur2'])){echo $edit_me['animateur2'];}?>"><?php   if(!empty($animateur2['nom'])){echo $animateur2['nom'];}else echo "aucun";?></option>                          
                          
                          <?php foreach($team as $animateur):?>
                                  <option value=<?php echo $animateur['id'];?>><?php echo $animateur['nom'];?></option>
                          <?php endforeach?>
                         
                      </select>
                      </div> 
                </div>
                    <?php 
                      echo $partners_forms->input(true,"file","image de couverture pour le programme","cover","image de couverure","bx bx-user",$edit_me['cover']);
                      echo $partners_forms->submit("ajouter_le_programme");
                    
                    ?>
                </div>
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