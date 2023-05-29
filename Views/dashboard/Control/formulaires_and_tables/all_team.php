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
          <?php       
                 require 'Views/dashboard/Control/coeur/team.php';                                          
                ?>
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="card">
              <h5 class="card-header">Toute notre équipe</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th></th>
                      <th>Nom Complet</th>
                      <th>Adress mail</th>
                      <th>post Occupé</th>

                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php  
                  foreach($equipe as $employ): 
                  ?>
                    <tr>
                      <td>
                        <div class="row"
                          style="height:70px;width:70px;border-radius:50%;overflow:hidden; justify-content:center;align-items:center;align-items:center; display:flex;">
                          <img src="Views/dashboard/uploads_images/<?php echo $employ['profil'] ;?>" alt="" class=""
                            width="70px" height="" id="uploadedAvatar">
                        </div>
                      </td>

                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                          <?php echo substr($employ['nom'],0,90); echo" ..." ;?>
                        </strong></td>
                      <td>
                        <?php echo substr($employ['email'],0,90); echo" ..." ;?>
                      </td>
                      <td>
                        <?php echo substr($employ['fonction'],0,90); echo" ..." ;?>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu" style="position:abolute;">
                            <a class="dropdown-item" href="modifier-dans-la-team?id_mb=<?=$employ['id'];?>"><i
                                class="bx bx-edit-alt me-1 d-none"></i> modifier</a>


                                
                          
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