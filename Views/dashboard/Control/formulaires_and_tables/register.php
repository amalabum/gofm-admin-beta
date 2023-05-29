<?php
                        require 'Views/dashboard/admin_includes/head.php';
                    ?>
 
  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <!-- <a href="index.html" class="app-brand-link gap-2"> -->
                  <span class="app-brand-logo demo" style="text-align:center;">
                      <img src="Views/dashboard/assets/logh-removebg-preview.png" alt="logo"> 
                      <!-- <br> <h5>Admin</h5> -->
                  </span>                   
                <!-- </a> -->
              </div>              <!-- /Logo -->
             
              <form id="formAuthentication" method="post" class="mb-3">
                <div class="mb-3">
                  <label for="email" class="form-label">Nom complet</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nom"
                    name="nom" <?php if(isset($_POST['nom'])){ $nom=$_POST['nom'];?>value="<?php echo $nom ;} ?>" type="text" placeholder="ex: Muhindo semakubi"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Adresse mail</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email" <?php if(isset($_POST['email'])){ $email=$_POST['email'];?>value="<?php echo $email ;} ?>" type="email" placeholder="ex: eliezer78@gmail.com"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label"  name="password" for="password">Mot de pass</label>
                   
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>                 
                </div>
                     <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label"  name="password" for="password"> Confirmer le Mot de pass</label>
                   
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>                 
                </div>
            
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" name="resgister" type="submit">Se connecter</button>
                </div>   <?php
                        require 'Views/dashboard/Control/coeur/auth.php';
                    ?>
              </form>

            
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>


      <?php
                        require 'Views/dashboard/admin_includes/js.php';
                    ?>
 
  </body>
</html>
