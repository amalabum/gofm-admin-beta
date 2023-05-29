



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
            
                       <?php         if (isset($_GET['page'])) {
        $page =$_GET['page'];
       }
       else{
        $page =1;
       }

       $offets=03;

       $number_per_page=$offets;
       $start_from=($page-1)*$offets;
                       
                       require 'Views/dashboard/Control/coeur/features.php';
                            if(isset($_POST['supprimer'])){
                              delete_article();
                                  require 'Views/dashboard/Control/coeur/db.php';
  
    $recup_data= $db->query("SELECT * FROM publications ORDER BY id_publication DESC limit $start_from,$number_per_page"); 
      $recup_data_for_pagination= $db->query("SELECT * FROM publications ORDER BY id_publication DESC"); 
while ($all_posts_for_pagination =  $recup_data_for_pagination->fetch()){
    $posts_for_pagination[]=$all_posts_for_pagination;
}
 
            
    }
                               

?>  



<div class="card mb-5">
               
                <div class="table-responsive text-nowrap">
                <div class="row container">
                  <div class="col-8 pt-4"> <H4 style="margin-left:-12px;">Blog/liste des articles</H4></div>
                  <div class="col-4 mt-3 mb-3" >
                   <form class="d-flex" onsubmit="return false" style=" margin-right:-30px;">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                  </div>
                </div>
                  <table class="table table-striped " style="80%">
                   
                    <thead>
                      <tr>
                        <th style="width:5px;"> id</th>
                        <th style="90%">Titre de l'aricle</th>
                        <th>AUTEUR</th>
                        <th>cATEGORIE</th>
                        <th>DATE/HEURE</th>
                        <th>ACTIONS </th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                            <?php 
                               $recup_data= $db->query("SELECT * FROM publications ORDER BY id_publication DESC limit $start_from,$number_per_page"); 
  
      $id=1;
    while ($all =  $recup_data -> fetch()){
      $posts[]=$all;
   }
   
      foreach($posts as $post): 
      
       
      ?>
                    
                      <tr>
                        <td class ="w"><?php echo "<div class='form-check form-control-sm footer-link m'>
                        <input class='form-check-input' type='checkbox' value='' id='' customCheck2' >

                      </div>"?> </td>
                        <td> <b><i> <?php echo substr($post['titre'],0,35); echo" ..." ;?> </i></b></td>
                         <td class ="w" style="90%">Go fm - 98.5</td>
                        <td>
                         <b><?php echo $post['categorie'];?></b>
                        </td>
                        <td><?php echo $post['mydate'];?></td>
                        <td>
  <a href="modifierlarticle?ilqvkdvvufhf=<?=$post['id_publication'];?>">                 
                           <button class="btn btn-primary btn-sm rounded-pill" style="color:white; font-weight:bold;"> Modifier</button></a>

                                           
                        
    <button
                          class= "btn  btn-sm rounded-pill"
                          type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#backDropModal"
                          style="background:#d35959;color:#FFFFFF;"
                        >
                          Supprimer
                        </button>
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content" method="post">
                              <div class="modal-header">
                                <span class="modal-title " id="backDropModalTitle" style="color:red;">Avertissement !</span>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <h5>Vous êtes sur le point de Supprimer définitivement un article </h5>
                                  <input type="text" name="id_to_delete" hidden value="<?php echo $post['id_publication'];?>">
                                </div>
                              
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Abandoner
                                </button>
                                <button type="submit" name="supprimer" class="btn btn-danger">Continuer</button>
                              </div>
                            </form>
                          </div>
                        </div>
                     
                     
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
  <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-end">

                                      <?php $total_records=count($posts_for_pagination);
                                       $total_per_page=ceil($total_records/$number_per_page);
                                        if($page >1){
                                            echo "
                                                 <li class='page-item prev'>
                              <a class='page-link' href='listedesarticles?page=".($page-1)."'><i class='tf-icon bx bx-chevrons-left'></i></a>
                            </li>"; 
                                        }
                                    


                                    for ($i=1; $i < $total_per_page ; $i++) { 
                                       
                                        
                                      if($page==$i){
                                        echo"
    <li class='page-item active'>
                              <a class='page-link ' href='listedesarticles?page=".$i."'>".($i)."</a>
                            </li>";
                                      }   
                                      else{
echo "
    <li class='page-item '>
                              <a class='page-link ' href='listedesarticles?page=".$i."'>".($i)."</a>
                            </li>";
                                      } 
                                         

                                          

                                       
                                    }
                                    if($i >$page){
                                            echo "
                                               
                            <li class='page-item next'>
                              <a class='page-link' href='listedesarticles?page=".($page+1)."'><i class='tf-icon bx bx-chevrons-right'></i></a>
                            </li>"; 
                                        }
                                  ?>                
                           
                        
                        
                          </ul>
                        </nav>
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