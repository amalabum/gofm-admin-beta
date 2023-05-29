



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
          <div class="row container-fluid mt-5"> 
             <a class="" href="adm-ajouter-un-programme"> <button type="button" class="btn btn-success"> Nouveau programme</button> </a>
                       
</div>
            <?php       
                 require 'Views/dashboard/Control/coeur/programmes.php';
                 // $recup_team= $db->query("SELECT * FROM partenaire ORDER BY id DESC limit 7");
                //   while ($all_team =  $recup_team->fetch()){
                //     $equipe[]=$all_team;
                //   }
                         
              // if(isset($_GET['search_by_day'])){
              //     $idf=$_GET['search_by_day'];
              //     echo  $idf;
              //  }
                ?>  
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">

          
<div class="card">
<div class="row col-12">
  <div class=" col-7">
    <div class="input-group">
                  <h5 class="card-header">Nos programmes</h5>
            
    </div>                          
</div>
<div class="col-5">
  <form  method="POST">
   <div class="input-group mt-3">
   
        <select  name="search_by_day" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
             <?php   
                   if(isset($_POST['search_by_day'])){
                     $myvalue =$_POST['search_by_day'];
                     ?> 
                      <option value="<?php echo $myvalue ;?>"><?php echo substr($table,10) ;?></option>
                     
                  <?php      }
                    else{ ?>
                       <?php echo $myvalue="programme_lundi";?>
                       <option selected value="<?php echo $myvalue ;?>">Lundi</option>
                <?php     }
   
                ?> 
   
 <option value="programme_lundi">lundi</option>
            <option value="programme_mardi">Mardi</option>
            <option value="programme_mercredi">Mercredi</option>
            <option value="programme_jeudi">jeudi</option>
            <option value="programme_vendredi">Vendredi</option>
            <option value="programme_samedi">Samedi</option>
            <option hidden value="programme_dimanche">Dimance</option>
           
            
      </select>   
      <button class="btn btn-outline-primary" type="submit">Rechercher </button>  
      </form>                      
</div>
</div>
</div>

                <!-- <h5 class="card-header">Nos programmes</h5> -->
            
                  <?php  

            
              $i=1;              
              if (!empty($programmes)) { ?>
                    <div class="table-responsive text-nowrap mt-2">
                  
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th style="width:2px">select</th>
                        
                        <th>Couverture</th>
                        <th>titre</th>                       
                        <th>debut & fin</th>                        
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
              <?php      foreach($programmes as $data): ?>
                 
                      <tr>
                       
                        <td class ="w" style="width:5%;"><?php echo "<div class='form-check form-control-sm footer-link m'>
                        <input class='form-check-input' type='checkbox' value='' id='' customCheck2' >

                      </div>"?> </td>
                          <td><div class="row" style="height:100px;border-radius:50%;overflow:hidden; width:100px;justify-content:center;align-items:center;align-items:center; display:flex;">  
                              <img src="Views/dashboard/uploads_images/<?php echo $data['cover'] ;?>" alt="" class="" width="200px" height=""  id="uploadedAvatar">
                  </div></td>
                        
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>  <?php echo substr($data['titre'],0,90);?> </strong></td>
                        
                        <td>
                          <?php echo $data['debut'];echo" ";echo $data['meridien_debut'];echo" à "; echo $data['fin'];echo" ";echo $data['meridien_fin'];?> 
                        </td>
                       <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="position:abolute;">
                              <a class="dropdown-item" href="adm-modification-programme?id_program=<?=$data['id'];?>&journée=<?php echo $myvalue;?>"><i class="bx bx-edit-alt me-1"></i> modifier</a>
                              <a class="dropdown-item d-none" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                         
                      <?php endforeach ;?> 
                          </tbody>
                  </table>
                </div>
           <?php    
              }
              else{
                  

                
                echo "
       

          <div class='container-fluid'>
           <hr>          
            <h5> Aucun programme n'est disponible pour cette journée</h5>
          </div> 
                        
                       
                 ";        
                
                
                
                
                
              }

?>
                
                 
                    
                
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



