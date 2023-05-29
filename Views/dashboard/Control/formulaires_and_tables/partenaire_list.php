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
    ?><!-- Content wrapper -->
          <div class="content-wrapper">
          <?php       
            require 'Views/dashboard/Control/coeur/partenaires.php';                                             
          ?>  
      <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
          <div class="card">
                <h5 class="card-header">Toute notre équipe</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th style="width:2px">select</th>
                        
                        <th>Logo</th>
                        <th>Enseign</th>                       
                        <th>site web</th>                        
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                  <?php  
                  $i=1;
                  foreach($partenaire as $data): 
                  ?>
                      <tr>                       
                        <td class ="w" style="width:5%;"><?php echo "<div class='form-check form-control-sm footer-link m'>
                        <input class='form-check-input' type='checkbox' value='' id='' customCheck2' >

                      </div>"?> </td>
                          <td><div class="row" style="height:50px;border-radius:50%;overflow:hidden; width:50px;justify-content:center;align-items:center;align-items:center; display:flex;">  
                              <img src="Views/dashboard/uploads_images/<?php echo $data['logo'] ;?>" alt="" class="" width="200px" height=""  id="uploadedAvatar">
                      </div></td>                        
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo substr($data['enseign'],0,90);?> </strong></td>
                        <!-- <td><?php //echo substr($data['email'],0,90); echo" ..." ;?> </td> -->
                        <td>
                          <?php echo substr($data['site_web'],0,90);?> 
                        </td>
                       <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="position:abolute;">
                              <a class="dropdown-item" href="adm-modification-partenaire?id_partner=<?=$data['id'];?>"><i class="bx bx-edit-alt me-1"></i> modifier</a>
                              <a class="dropdown-item d-none" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>                         
                      <?php endforeach ?>                
                    </tbody>
                  </table>
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



