
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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Articles /</span> Ajouter</h4>
   <div class="row container justify-content-center">  
   <?php         require 'Views/dashboard/Control/coeur/features.php';
                           if(isset($_POST['envoyer'])){
                              new_article();                       
                             
                               
                           }
                               

?>  

</div>  
            <div class="row justify-content-center">  
     
              <div class="col-md-12">
                  <div class="card mb-0">
                    <h5 class="card-header"></h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <form method="post" enctype="multipart/form-data">
                        <label for="exampleFormControlInput1" class="form-label">Sujet</label>
                        <input type="text" name="titre"  <?php if(isset($_POST['titre'])){ $myvalue=$_POST['titre'];?>value="<?php echo $myvalue ;} ?>"  class="form-control" id="exampleFormControlInput1" placeholder="ex : Pourquoi l'existence de la radio Go fm ?">
                      </div>                      
                     
                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Catégorie</label>
                        <select class="form-select" name="categorie" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="Politique">Politique</option>
                          <option selected value="Actualité">Actualité</option>
                          <option value="Education">Education</option>
                          <option value="Education">Business</option>
                        </select>
                      </div>                     
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Slug</label>
                        <input type="text" name="slug"  <?php if(isset($_POST['slug'])){ $myvalue=$_POST['slug'];?>value="<?php echo $myvalue ;} ?>"  class="form-control" id="exampleFormControlInput1" placeholder="ex : Pourquoi l'existence de la radio Go fm ?">
                      </div>  
                      <div class="mt-4">
                        <label for="exampleFormControlTextarea1" class="form-label" >Contenu</label>
                        <textarea name="details"  class="form-control editor" style="min-height: 476px;" placeholder=" Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laudantium nesciunt aliquam quos harum, sed officia id? Voluptas ut voluptatibus dignissimos mollitia corporis, expedita iste maiores dolores, excepturi neque sequi!">  
                        <?php if(isset($_POST['details'])){ $myvalue=$_POST['details'];?> <?php echo $myvalue ;} ?> 
                        </textarea>
                      </div>

                      <div class="mt-3">
                        <label for="formFile"  class="form-label">Couverture</label>
                        <input class="form-control" name="pictures" type="file" id="formFile">
                      </div>
                      <div class="mt-3">
                        <label for="formFile"  class="form-label">Couverture</label>
                        <input class="form-control" name="pictures" type="file" id="formFile">
                      </div>
                    </div>
                    </div>
                    <button type="submit"  name="envoyer" class="btn rounded-pill btn-primary  col-12 mt-2">
                             Publier l'article
                            </button>
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