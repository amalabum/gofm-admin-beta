<?php
require 'Views/API/Classes/Crud.php';
$animateurs = new Crud();
$myApi= new Crud();  
// récuperations des rôles
$myApi->Get("roles");
$roles = $myApi->response;  
// récuperations des programmes
$myApi->Get("programmes");
$programmes = $myApi->response;      

$myApi->Get("categories");
$categories = $myApi->response;      


$myApi->Get("podcasts");
$podcasts = $myApi->response;   
                   
function input_value($isset,$default=null){

    if(isset($_POST[$isset]) && !empty(isset($_POST[$isset]))){
      $value = $_POST[$isset];
      echo $value;
    }
    elseif(!empty($default)){
    
     echo  $default;
    }
  
  } 
function selected_input_value($value,$default){
    if(isset($_POST[$value]) && !empty(isset($_POST[$value]))){
      $value = $_POST[$value];
      echo "<option selected value='$value' data-select2-id='3'>$value</option>";
    }
    elseif(!empty($default)){ 
      echo "<option selected value='$default' data-select2-id='3' style='border-bottom:2px dashed #1B1B1B;'>$default </br> </option>";
      

    } 
}
function substr_customised($str,int $int){
  $len=strlen($str);
  if($len >= $int){
    echo substr($str,0,$int); 
        echo "...";
  }
  else
    echo substr($str,0,$int);       
}
function text_area_value($isset,$default=null){

    if(isset($_POST[$isset]) && !empty(isset($_POST[$isset]))){
      $value = $_POST[$isset];
      echo $value ;
    }
    elseif(!empty($default)){
    echo "$default";
    }
  } 


                      
?>
