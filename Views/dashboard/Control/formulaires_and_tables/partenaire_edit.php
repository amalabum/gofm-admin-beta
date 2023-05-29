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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Partenaire /</span> Modification </h4>
            <div class="row container justify-content-center">

              <?php    
              require 'Views/dashboard/Control/coeur/db.php';    
              require 'Views/dashboard/Control/coeur/partenaires.php';
              require 'Views/dashboard/Control/coeur/form_generator.php';
              $partners_forms= new Form_generator();             

      if(isset($_POST['modifier_partenaire'])){
          modifier_le_partenaire();   
              
             if(isset($_GET['id_partner'])){      
               $id= htmlspecialchars($_GET['id_partner']);
                if (is_numeric($id)) {          
                    $query= $db->query("SELECT * FROM partenaire WHERE id='".$id."'");  
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
                  <h5 class="mb-0">Une rectification sur le partenaire ?</h5>
                  <small class="text-muted float-end">N'oublier pas d'enregister</small>
                </div>
                <div class="card-body ">
                  <form method="post" enctype="multipart/form-data">
                    <?php 
                     // $type,$label,$placeholder,$name,$value=null
                      echo $partners_forms->input(false,"text","nom du partenaire","nom_partenaire","nom du partenaire","bx bx-user",$edit_me['enseign']);
                      echo $partners_forms->input(false,"text","Site web du partenaire","site_partenaire","site web du partenaire","bx bx-buildings",$edit_me['site_web']);
                      echo $partners_forms->input(true,"file","Remplacer le logo par","logo_partenaire","site web du partenaire","bx bx-buildings",$edit_me['logo']);
                      echo '<input type="text" hidden name="id_part" value="'.$edit_me['id'].'">';
                      echo $partners_forms->submit("modifier_partenaire");
                    
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