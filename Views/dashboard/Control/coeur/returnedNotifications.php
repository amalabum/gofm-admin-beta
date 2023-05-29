<?php 
//messages d'erreurs debut
function notification($error_type,$message){
    
    if ($error_type == "success") {
     echo "<div class='alert alert-success alert-dismissible col-6' role='alert' style='position:absolute;position:fixed;top:10%;right:5%;z-index:30000;display:block;transition:2s;'>
              <b>".$message."</b> 
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
    }
    elseif($error_type == "danger") {
     echo "<div class='alert alert-danger alert-dismissible col-6' role='alert' style='position:absolute;position:fixed;top:10%;right:5%;z-index:30000;display:block;transition:2s;'>
              <b>".$message."</b> 
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
    }
    
}