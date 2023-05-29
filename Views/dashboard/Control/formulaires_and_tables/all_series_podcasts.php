

<?php
   require 'Views/dashboard/admin_includes/head.php';
   require "Views/dashboard/admin_includes/configs.php";
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
            
        <?php   if (isset($_GET['page'])) {
        $page =$_GET['page'];
       }
       else{
        $page =1;
       }

       $offets=10;
       
       $number_per_page=$offets;
       $start_from=($page-1)*$offets;
                       
                       require 'Views/dashboard/Control/coeur/features.php';
                            if(isset($_POST['supprimer'])){
                              delete_article();
                                  require 'Views/dashboard/Control/coeur/db.php';
  
    $recup_data= $db->query("SELECT * FROM podcasts ORDER BY id DESC"); 
    while ($datas =  $recup_data->fetch()){

       $datas_list[]=$datas;

    }
 
            
    }
?>  



<div class="card mb-5">
               
                <div class="table-responsive text-nowrap">
                <div class="row container">
                  <div class="col-8 pt-4"> <H4 style="margin-left:-12px;"> PODCASTS / <span class='text-muted fw-light'>TOUTES LES SERIES </span></H4></div>
                  <div class="col-4 mt-3 mb-3" >
                  
                  </div>
                </div>
                  <table class="table table-striped " style="80%">
                   
                    <thead>
                      <tr>
                        <th style="width:5px;">id</th>
                        <th style="90%">Titre de l'aricle</th>
                        <th>ANIMATEUR</th>
                        <th>cATEGORIE</th>
                        <th>DATE/HEURE</th>
                        <th>ACTIONS </th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                            <?php 
                               $recup_data= $db->query("SELECT * FROM podcasts   where parent=0  ORDER BY id DESC"); 
  
      $id=1;
    while ($all =  $recup_data -> fetch()){
      $datas[]=$all;
   }
   
      foreach($datas as $data): 
      
       
      ?>
                    
                      <tr>
                        <td class ="w"><?php echo "<div class='form-check form-control-sm footer-link m'>
                        <input class='form-check-input' type='checkbox' value='' id='' customCheck2' >

                      </div>"?> </td>
                        <td> <b><i> <?php echo substr($data['theme'],0,35); echo" ..." ;?> </i></b></td>
                         <td class ="w" style="90%">Go fm - 98.5</td>
                        <td>
                         <b><?php echo $data['categorie'];?></b>
                        </td>
                        <td><?php echo $data['categorie'];?></td>
                        <td>
  <a href="updatepodcast?podcast=<?=$data['id'];?>">                 
      <button class="btn btn-primary btn-sm rounded-pill" style="color:white; font-weight:bold;"> Modifier l'introduction</button>
  </a>
  <a href="podcast-new?parent=<?=$data['id'];?>">                 
      <button class="btn btn-secondary btn-sm rounded-pill" style="color:white; font-weight:bold;">Ajouter une épisode</button>
  </a>
   <a href="podcasts-by-serie?parent=<?=$data['id'];?>">                 
      <button class="btn btn-success btn-sm rounded-pill" style="color:white; font-weight:bold;">Voir plus</button>
  </a>
                                           
                        </td>
                      </tr>
                      
                  
                              <?php endforeach ?> 
                     
                      
                    </tbody>
                  </table>
                </div>
              </div>

             <div class="table_foot row">
              <div class="grouped_actions col-5" style="visibility:hidden;">
             <b> Actions groupées : </b>  <div class="btn-group" id="dropdown-icon-demo">
                          <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                             </i>  Placer dans la corbeil 
                          </button>
                          <ul class="dropdown-menu disabled" style="">
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Action</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Another action</a>
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Something else here</a>
                            </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Separated link</a>
                            </li>
                          </ul>
                        </div>
              </div>
              <div class="foot_pagination col-7">
  
              </div>

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