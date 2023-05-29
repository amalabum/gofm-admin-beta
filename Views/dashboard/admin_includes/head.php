<?php
  
  // session_start();
  // if(!isset($_SESSION['authified'])) {

  // if (!headers_sent()) {
  //   header('Location: login');
  // // exit;
  //   }
  // }
  // elseif(isset($_POST['deconnexion'])){
  //   session_destroy();
  //    header('Location: login');
  // }
 
  

  

   
?>

<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>GO FM | ADMIN</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="Views/dashboard/assets/logh-removebg-preview.png" />

  
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="Views/dashboard/assets/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="Views/dashboard/assets/vendor/css/core.css" />
    <link rel="stylesheet" href="Views/dashboard/assets/vendor/css/theme-default.css"/>
    <link rel="stylesheet" href="Views/dashboard/assets/css/demo.css" />
    <link rel="stylesheet" href="Views/dashboard/assets/anima.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="Views/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    
    <!-- Helpers -->
    <script src="Views/dashboard/assets/vendor/js/helpers.js"></script>
    <link rel="stylesheet" href="Views/dashboard/assets/vendor/css/pages/page-auth.css" />
    <script src="Views/dashboard/assets/js/config.js"></script>
     
    
<link rel="stylesheet" href="Views/dashboard/richtexteditor/rte_theme_default.css" />
<script type="text/javascript" src="Views/dashboard/richtexteditor/rte.js"></script>
<script type="text/javascript" src='"Views/dashboard/richtexteditor/plugins/all_plugins.js'></script> 




  </head>




  <style>
    #suess {
      /* position: absolute;
      position: fixed; */
      background: #18c537;
      z-index: 100000;
      padding: 12px 18px;
      color: #FFFFFF;
      /* font-weight:bold; */
      font-size: 17px;
      border-radius: 10px;
      right: 60px;
      top: 60px;
      display: none;
    }

    #wanng {
      /* position: absolute;
      position: fixed; */
      background: #e55353;
      z-index: 100000;
      padding: 12px 18px;
      color: #FFFFFF;
      /* font-weight:bold; */
      font-size: 17px;
      border-radius: 10px;
      right: 60px;
      top: 60px;
      display: none;


    }

    .error {

      z-index: 100000;
      padding: 6px 9px;
      color: #FFFFFF;
      /* font-weight:bold; */
      font-size: 17px;
    }

    .required {
      color: red;
      font-size: 20px;
    }
  </style>

</head>