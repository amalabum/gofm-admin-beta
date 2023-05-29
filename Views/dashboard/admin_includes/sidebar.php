 <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" >
          <div class=" mb-2" style="height:255px;background-image:url('Views/dashboard/assets/img/illustrations/girl-doing-yoga-light.png');background-repeat: no-repeat;background-size:cover;"  >            
             <div class="container app-brand text-center" style="position:relative;background:rgba(0,0,0,0.8);height:100%;width:100%;"> 
               <div class="avatar avatar" style="position:absolute; top:12px;right:12px;">
                      <img src="Views/dashboard/assets/writer.png" alt class="w-px-40 h-auto rounded-circle" />  
                    </div> 
             <span class="app-brand-text demo menu-text fw-bolder ms-2">  <h3 style="color:#D9D9D9;"> GO fM | Admin</h3> </span>
            </div>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1" style="">
            <!-- Dashboard -->
            <!-- <li class="menu-item">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li> -->
             <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Contenu du Site</span>
            </li>
            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Layouts">BLOG</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="nouvelarticle" class="menu-link">
                    <div data-i18n="Without menu">Ajouter un article</div>
                  </a>
                </li>
                 <li class="menu-item">
                  <a href="listedesarticles" class="menu-link">
                    <div data-i18n="Without menu">tous nos aticles</div>
                  </a>
                </li>  
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Layouts">PODCASTS</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="podcast-new" class="menu-link">
                    <div data-i18n="Without menu">Créer une serie</div>
                  </a>
                </li>
                 <li class="menu-item">
                  <a href="serie-podcasts" class="menu-link">
                    <div data-i18n="Without menu">Tous les podcasts</div>
                  </a>
                </li>  
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Authentications">PROGRAMMES</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="adm-ajouter-un-programme" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Ajouter </div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="admn-list-programmes" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Gérer les programmes </div>
                  </a>
                </li>
                           
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Authentications">PARTENAIRES</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="adm-ajouter-un-partenaire" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Ajouter </div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="admn-tous-partenaires" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Nos partenaires  </div>
                  </a>
                </li>
              
              
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Authentications">ANIMATEURS</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ajouter-un-collegue" class="menu-link" target="_blank">
                    <div data-i18n="Basic">ajouter </div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="liste-des-collegues" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Gérer l'equipe </div>
                  </a>
                </li>
              
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">                
                <i class="menu-icon tf-icons bx bx-cog me-2"></i>
                <div data-i18n="Layouts">CONFIGURATIONS</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="adm-modification-de-la-baniere" class="menu-link">
                    <div data-i18n="Without menu">Banière</div>
                  </a>
                </li>
                    <li class="menu-item">
                  <a href="adm-modification-apropos" class="menu-link">
                    <div data-i18n="Without menu">Qui sommes-nous ?</div>
                  </a>
                </li>    <li class="menu-item">
                  <a href="adm-modification-contacts" class="menu-link">
                    <div data-i18n="Without menu">Contacts</div>
                  </a>
                </li>   
                
               
              </ul>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Mon compte</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Gérer mon Compte</div>
              </a>
              <ul class="menu-sub">
              
                <li class="menu-item">
                  <a href="myacount" class="menu-link">
                    <div data-i18n="Account">Mes informations</div>
                  </a>
                </li>            
              
              </ul>
            </li>
            
          
            <!-- Components -->
            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Composants</span></li> -->
            <!-- Cards -->
            <!-- <li class="menu-item">
              <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cards</div>
              </a>
            </li> -->
            <!-- User interface -->
            <!-- <li class="menu-item" >
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface"> important</div>
              </a>
              <ul class="menu-sub"> -->
                


                <!-- <li class="menu-item">
                  <a href="ui-alerts.html" class="menu-link">
                    <div data-i18n="Alerts">Alerts</div>
                  </a>
                </li> -->


                <!-- <li class="menu-item">
                  <a href="ui-badges.html" class="menu-link">
                    <div data-i18n="Badges">Badges</div>
                  </a>
                </li> -->


                <!-- <li class="menu-item">
                  <a href="ui-buttons.html" class="menu-link">
                    <div data-i18n="Buttons">Buttons</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-carousel.html" class="menu-link">
                    <div data-i18n="Carousel">Carousel</div>
                  </a>
                </li> -->
                <!-- <li class="menu-item">
                  <a href="ui-collapse.html" class="menu-link">
                    <div data-i18n="Collapse">Collapse</div>
                  </a>
                </li> -->
                <!-- <li class="menu-item">
                  <a href="ui-dropdowns.html" class="menu-link">
                    <div data-i18n="Dropdowns">Dropdowns</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-footer.html" class="menu-link">
                    <div data-i18n="Footer">Footer</div>
                  </a>
                </li> -->
                
             
                <!-- <li class="menu-item">
                  <a href="ui-navbar.html" class="menu-link">
                    <div data-i18n="Navbar">Navbar</div>
                  </a>
                </li>
                <li class="menu-item d-none">
                  <a href="ui-offcanvas.html" class="menu-link">
                    <div data-i18n="Offcanvas">Offcanvas</div>
                  </a>
                </li>
                <li class="menu-item d-none">
                  <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                    <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                  </a>
                </li>
              
                <li class="menu-item d-none">
                  <a href="ui-spinners.html" class="menu-link">
                    <div data-i18n="Spinners">Spinners</div>
                  </a>
                </li>
               
              
                <li class="menu-item d-none">
                  <a href="ui-tooltips-popovers.html" class="menu-link">
                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                  </a>
                </li>
               
              </ul>
            </li> -->

        

       

            <!-- Forms & Tables -->
            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
            Forms 
            <li class="menu-item active open d-none">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Form Elements</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups">Input groups</div>
                  </a>
                </li>
              </ul>
            </li>
          <li class="menu-item d-none">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form">Vertical Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                  </a>
                </li>
              </ul>
            </li> 
            <!-- Tables -->
            <li class="menu-item d-none">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li>
           
          </ul>
        </aside>
        <!-- / Menu -->