<?php 
require "Views/dashboard/Control/coeur/returnedNotifications.php";
require "Views/dashboard/Control/coeur/upload_file.php";

//recuperation de la section baniere

 require 'db.php';
 $recup_configs= $db->query("SELECT * FROM configurations where id=2023");
 $configuration_x= $recup_configs->fetch();



// modification dans la section baniere

function update_configurations_baniere(){
    
  require 'db.php';
  
  if(isset($_POST['frequence_section'],$_POST['frequence_legende'],$_POST['diffusion_youtube'],$_FILES['pictures'])){
       
        
        $frequence_section= htmlspecialchars($_POST['frequence_section']);
        $frequence_legende= htmlspecialchars($_POST['frequence_legende']);
        $diffusion_youtube= htmlspecialchars($_POST['diffusion_youtube']);
        $img= $_FILES['pictures'];   
  
        if (!empty($_FILES['pictures']['tmp_name'])) {
          
         if(!empty($frequence_section) AND !empty($frequence_legende) AND !empty($diffusion_youtube) AND !empty($img)){
                            
                  $imagemisenavant= new upload_file();
                  upload_file::upload($img);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;
                
                    if($uplaod_status==1) {

                      $db->exec("UPDATE configurations set frequence_section='".$frequence_section."', frequence_legende='".$frequence_legende."', lien_youtube ='".$diffusion_youtube."', banier_img='".$uplaod_name."'  where id=2023 ");                 
                                             
                      notification("success","Informations modifiées effectué avec succes ... image modifié");                        
                    } 
                    elseif($uplaod_status==0) {
                      notification("danger","C'est probablement un avec probleme l'image, rassurez-vous d'avoir choisi une image en PNG/png ou en JPG/jpg, merci !");
                   }              
         } 
         
          
        }
        elseif (empty($_FILES['pictures']['tmp'])) {

          if(!empty($frequence_section) AND !empty($frequence_legende) AND !empty($diffusion_youtube)){
          
              $db->exec("UPDATE configurations set frequence_section='".$frequence_section."', frequence_legende='".$frequence_legende."', lien_youtube ='".$diffusion_youtube."'  where id=2023 ");                  
              notification("success","modification effectuée avec succes");                        
          }
        elseif(empty($_POST['frequence_section']) or empty($_POST['frequence_legende']) or empty($_POST['diffusion_youtube'])) {    
          notification("danger","impossible d'evoyer un formulaire incomplet, Veuillez renseigner toutes les informations necaissaires, merci !");
        }
        else{
             notification("danger","Oups quelque chose s'est mal passée, merci !");
        }
         
        }         
   else{
    notification("danger","Erreur inconu, veuillez contacter l'administrateur");
  } 
  
 }

 }




// modification dans la Section à propos

function update_configurations_apropos(){
    
  require 'db.php';

  if(isset($_POST['apropos'],$_FILES['picture1'],$_FILES['picture2'])){
       
        
        $apropos= $_POST['apropos'];
        $img1= $_FILES['picture1'];
        $img2= $_FILES['picture2'];    
  
        if (!empty($_FILES['picture1']['tmp_name'])) {
          
            if(!empty($apropos) AND !empty($img1)){
                            
                  $imagemisenavant= new upload_file();
                  upload_file::upload($img1);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;
                
                    if($uplaod_status==1) {

                     $db->exec("UPDATE configurations set Apropos='".$apropos."', img1='".$uplaod_name."'  where id=2023 ");     
                     unset($_POST);            
                                             
                      notification("success","Informations modifiées effectué avec success ");                        
                    } 
                    elseif($uplaod_status==0) {
                      notification("danger","Il y'a un probleme avec le fichier choisi, rassurez-vous d'avoir choisi une image en PNG/png , JPG/jpg , merci !");
                   }              
            }         
          
        }
        elseif (!empty($_FILES['picture2']['tmp_name'])) {
          
            if(!empty($apropos) AND !empty($img2)){
                            
                  $imagemisenavant= new upload_file();
                  upload_file::upload($img2);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;
                
                    if($uplaod_status==1) {

                     $db->exec("UPDATE configurations set Apropos='".$apropos."', img2='".$uplaod_name."'  where id=2023 ");   
                     unset($_POST);                 
                                             
                      notification("success","Informations modifiées effectué avec success ");                        
                    } 
                    elseif($uplaod_status==0) {
                      notification("danger","C'est probablement un problem avec l'image, rassurez-vous d'avoir choisi une image en PNG/png ou en JPG/jpg, merci !");
                   }              
            }         
          
        }
        elseif (empty($_FILES['picture1']['tmp']) or empty($_FILES['picture2']['tmp'])) {

          if(!empty($apropos)){
          
              $db->exec("UPDATE configurations set Apropos='".$apropos."'  where id=2023 ");                 
              notification("success","Success");                        
          }
        elseif(empty($_POST['apropos']) or empty($_POST['picture1']) or empty($_POST['picture2'])) {    
          notification("danger","impossible d'evoyer un formulaire incomplet, Veuillez renseigner toutes les informations necaissaires, merci !");
        }
        else{
             notification("danger","Oups quelque chose s'est mal passée, merci !");
        }
     }         
   else{
    notification("danger","Erreur inconu, veuillez contacter l'administrateur");
  } 
  
 }

 }

//update contacts
function update_configurations_contacts(){
     require 'db.php';
if(isset($_POST['contact'],$_POST['email'],$_POST['twitter'],$_POST['instagram'],$_POST['linkedin'],$_POST['facebook'], $_POST['adress'])){
   $contact= htmlspecialchars($_POST['contact']);
   $email= htmlspecialchars($_POST['email']);
   $twitter= htmlspecialchars($_POST['twitter']);
   $instagram= htmlspecialchars($_POST['instagram']);
   $linkedin= htmlspecialchars($_POST['linkedin']);
   $facebook= htmlspecialchars($_POST['facebook']);
   $adress= htmlspecialchars($_POST['adress']);
 

   if(!empty($contact) AND !empty($email) AND !empty($twitter) AND !empty($instagram) AND !empty($linkedin) AND !empty($facebook) AND !empty($adress)){
        $db->exec("UPDATE configurations set telephone='".$contact."',email='".$email."',twitter='".$twitter."',instagram='".$instagram."',linkedin='".$linkedin."',facebook='".$facebook."',adress='".$adress."'   where id=2023 ");   
        
        notification("success","Modification effectuée avec success");
        unset($_POST['contact']);
        
         
   }
   else{
     notification("danger","Oups ! il ya des informations qui manquent");
   
   }   
}
else{
    notification("danger","Oups !, quelque chose s'est mal passée veuillez réessayer, si cela pesiste veuillez contacter l'administrateur web");
    
}
}