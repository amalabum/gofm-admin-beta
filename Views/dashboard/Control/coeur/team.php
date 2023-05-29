<?php 
require "Views/dashboard/Control/coeur/returnedNotifications.php";
require "Views/dashboard/Control/coeur/upload_file.php";

//  toute l'equipe
 require 'db.php';
 $recup_team= $db->query("SELECT * FROM team ORDER BY id DESC limit 7");
 while ($all_team =  $recup_team->fetch()){
    $equipe[]=$all_team;
 }


// access au contenu à modifier dans l'equipe
  // Modification geting id
    if(isset($_GET['id_mb'])){
      
      $id= htmlspecialchars($_GET['id_mb']);
      if (is_numeric($id)) { 
         
         $query= $db->query("SELECT * FROM team WHERE id='".$id."'");  
         $updatble= $query->fetch();
         //var_dump($updatble);
         if(!empty($updatble)){
            $edit_me=$updatble;
         }
         elseif(empty($updatble)){
          notification("danger","aucun agent ne correspond à votre recherche");
         }
      }
      elseif(!is_int($id)){      
        notification("danger","aucun resultat n'a eté trouvé");
      }
      
    }
// debut crud sur la team









// ajout à la team
function ajouter_dans_l_equipe(){
    
  require 'db.php';
  if(isset($_POST['nom_complet'],$_POST['fonction'],$_POST['twitter'],$_POST['instagram'],$_POST['linkedin'],$_POST['email'],$_FILES['pictures'])){
        
        
        $nom_complet= htmlspecialchars($_POST['nom_complet']);
        $poste= htmlspecialchars($_POST['fonction']);
        $twitter= htmlspecialchars($_POST['twitter']);
        $instagram= htmlspecialchars($_POST['instagram']);
        $linkedin= htmlspecialchars($_POST['linkedin']);
        $email= htmlspecialchars($_POST['email']);
        $img= $_FILES['pictures'];    
        $img_control= $_FILES['pictures']['tmp_name'];   
       
        if(!empty($nom_complet) AND !empty($poste) AND !empty($instagram) AND !empty($twitter) AND !empty($linkedin) AND !empty($email) AND !empty($img_control)){
                            
                  $imagemisenavant= new upload_file();
                  upload_file::upload($img);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;
                
                    if($uplaod_status==1) {

                         $db->exec("INSERT into team (nom,fonction,twitter,instagram,linkedin,email,profil) values ('$nom_complet',' $poste','$twitter','$instagram','$linkedin','$email','$uplaod_name')");                 
                        
                         notification("success","Ajout effectuée avec succes");                        
                           unset($_POST); 
                           $_POST = Null;
                    } 
                    elseif($uplaod_status==0) {
                      notification("danger","Il y'a un probleme avec le fichier choisi, rassurez-vous d'avoir choisi une image en PNG/png, JPG/jpg ou GIF/gif  , merci !");                    }              
        }
        elseif(empty($nom_complet) or empty($poste) or empty($instagram) or empty($twitter) or empty($linkedin) or empty($email) or empty($img_control)) {    
          notification("danger","Vous essayez d'envoyer un formulaire incomplet, Veuillez renseigner toutes les informations necaissaires, merci !");
        }
   }
  else{
    notification("danger","Erreur inconu, veuillez contacter l'administrateur");
  } 
  
 }









// modification dans la team
function update_dans_la_team(){
    
  require 'db.php';
  if(isset($_POST['nom_complet'],$_POST['fonction'],$_POST['twitter'],$_POST['instagram'],$_POST['linkedin'],$_POST['email'],$_FILES['pictures'],$_POST['id_for_editing_team'])){
        
        
        $nom_complet= htmlspecialchars($_POST['nom_complet']);
        $poste= htmlspecialchars($_POST['fonction']);
        $twitter= htmlspecialchars($_POST['twitter']);
        $instagram= htmlspecialchars($_POST['instagram']);
        $linkedin= htmlspecialchars($_POST['linkedin']);
        $email= htmlspecialchars($_POST['email']);
        $img= $_FILES['pictures'];  
        $id_for_editing_team= $_POST['id_for_editing_team'];    
        
        

       
        
        if (!empty($_FILES['pictures']['tmp_name'])) {
          
         if(!empty($nom_complet) AND !empty($poste) AND !empty($instagram) AND !empty($twitter) AND !empty($linkedin) AND !empty($email) AND !empty($img) AND !empty($id_for_editing_team)){
                            
                  $imagemisenavant= new upload_file();
                  upload_file::upload($img);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;
                
                    if($uplaod_status==1) {

                      $db->exec("UPDATE team set nom='".$nom_complet."', fonction='".$poste."', twitter ='".$twitter."', instagram='".$instagram."', linkedin='".$linkedin."' , email='".$email."' , profil='".$uplaod_name."'  where id='".$id_for_editing_team."'");                 
                                             
                      notification("success","modification effectuée avec succes ... image modifié");                        
                    } 
                    elseif($uplaod_status==0) {
                      notification("danger","un probleme votre avatar ?, rassurez-vous d'avoir choisi une image en PNG/png ou en JPG/jpg, merci");
                   }              
         } 
         
          
        }
        elseif (empty($_FILES['pictures']['tmp'])) {

          if(!empty($nom_complet) AND !empty($poste) AND !empty($instagram) AND !empty($twitter) AND !empty($linkedin) AND !empty($email) AND !empty($img) AND !empty($id_for_editing_team)){
          
              $db->exec("UPDATE team set nom='".$nom_complet."', fonction='".$poste."', twitter ='".$twitter."', instagram='".$instagram."', linkedin='".$linkedin."' , email='".$email."'  where id='".$id_for_editing_team."'");                 
              notification("success","Modification effectuée avec succes, avatar intact");                        
          }
        elseif(empty($_POST['nom_complet']) or empty($_POST['fonction']) or empty($_POST['twitter']) or empty($_POST['instagram']) or empty($_POST['linkedin']  or empty($_POST['email']) or empty($img))) {    
          notification("danger","impossible d'evoyer un formulaire incomplet, Veuillez renseigner toutes les informations necaissaires, merci !");
        }
        else{
             notification("danger","Oups quelque chose s'est mal passée, merci !");
        }
         
          
        }
        














       
//         if(!empty($nom_complet) AND !empty($poste) AND !empty($instagram) AND !empty($twitter) AND !empty($linkedin) AND !empty($email) AND !empty($img) AND !empty($id_for_editing_team)){
                            
//                   $imagemisenavant= new upload_file();
//                   upload_file::upload($img);
//                   $uplaod_status=upload_file::$upload_cod;
//                   $uplaod_name = upload_file::$name_to_up;
                
//                     if($uplaod_status==1) {

//                         // $db->exec("INSERT into team (nom,fonction,twitter,instagram,linkedin,email,profil) values ('$nom_complet',' $poste','$twitter','$instagram','$linkedin','$email','$uplaod_name')");                 
                        
//                          notification("success","modification effectuée avec succes");                        
//                         //   unset($_POST); 
//                         //   $_POST = Null;
//                     } 
//                     elseif($uplaod_status==0) {
//                          notification("danger","un probleme votre avatar ?, rassurez-vous d'avoir choisi une image en PNG/png ou en JPG/jpg, merci");
//                     }              
//         }
//         elseif(empty($_POST['nom_complet']) or empty($_POST['fonction']) or empty($_POST['twitter']) or empty($_POST['instagram']) or empty($_POST['linkedin']  or empty($_POST['email']) or empty($img))) {    
//           notification("danger","Vous essayez d'envoyer un formulaire incomplet, Veuillez renseigner toutes les informations necaissaires, merci !");
//         }
//         else{
//              notification("danger","Oups quelque chose s'est mal passée, merci !");
//         }
  }
  else{
    notification("danger","Erreur inconu, veuillez contacter l'administrateur");
  } 
  
 }

// fin crud sur la team





?>  