<?php 
require "Views/dashboard/Control/coeur/returnedNotifications.php";
require "Views/dashboard/Control/coeur/upload_file.php";

//  toutes nos partenaires
 require 'db.php';
 $recup_datas= $db->query("SELECT * FROM partenaire ORDER BY id DESC limit 7");
 while ($all_partenaires =  $recup_datas->fetch()){
    $partenaire[]=$all_partenaires;
 }
// Modification geting id
    if(isset($_GET['id_partner'])){
      
      $id= htmlspecialchars($_GET['id_partner']);
      
      if (is_numeric($id)) { 
         
         $query= $db->query("SELECT * FROM partenaire WHERE id='".$id."'");  
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
// ajout à la team
function un_nouveau_partenaire(){    
  require 'db.php';
  if(isset($_POST['nom_partenaire'],$_POST['site_partenaire'],$_FILES['logo_partenaire'])){        
        
        $nom_partenaire= htmlspecialchars($_POST['nom_partenaire']);
        $site_partenaire= htmlspecialchars($_POST['site_partenaire']);
        $logo_tmp_name= $_FILES['logo_partenaire']['tmp_name']; 
        $logo= $_FILES['logo_partenaire'];

        if(!empty($nom_partenaire) AND !empty($site_partenaire) AND !empty($logo_tmp_name)){

                    $imagemisenavant= new upload_file();
                    upload_file::upload($logo);
                    $uplaod_status=upload_file::$upload_cod;
                    $uplaod_name = upload_file::$name_to_up;
                
                    if($uplaod_status==1) {
                           $db->exec("INSERT into partenaire (enseign,site_web,logo) values ('$nom_partenaire',' $site_partenaire','$uplaod_name')");               
                        
                           notification("success"," $nom_partenaire vient d'etre ajouté à notre liste de partenaires");                        
                           unset($_POST); 
                           $_POST = Null;
                    } 
                   elseif($uplaod_status==0) {
                   notification("danger","Il y'a un probleme avec le fichier choisi, rassurez-vous d'avoir choisi une image en PNG/png, JPG/jpg ou GIF/gif  , merci !");                    }              
         }
         elseif(empty($nom_partenaire) or empty($site_partenaire) or empty($logo_tmp_name)) {    
            notification("danger","Vous essayez d'envoyer un formulaire incomplet, Veuillez renseigner toutes les informations necaissaires, merci !");           
         }
        else{
             notification("danger","Oups quelque chose s'est mal passée, veuillez reesayer !");
         }
  }
  else{
    notification("danger","Oups! quelque chose s'est mal passée, si cela persiste veuillez contacter le webmaster");
  } 
  
 }

//  modifier_le_partenaire

function modifier_le_partenaire(){  

  require 'db.php';
  if(isset($_POST['nom_partenaire'],$_POST['site_partenaire'],$_FILES['logo_partenaire'],$_POST['id_part'])){        
        
        $nom_partenaire= htmlspecialchars($_POST['nom_partenaire']);
        $site_partenaire= htmlspecialchars($_POST['site_partenaire']);
        $id_p= htmlspecialchars($_POST['id_part']);
        $logo_tmp_name= $_FILES['logo_partenaire']['tmp_name']; 
        $logo= $_FILES['logo_partenaire']; //

        if(!empty($logo_tmp_name)){
                    
               if (!empty($nom_partenaire) and !empty($site_partenaire)) {
                  $imagemisenavant= new upload_file();
                  upload_file::upload($logo);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;

                     if($uplaod_status==0) {
                       notification("danger","Il y'a un probleme avec le fichier choisi, rassurez-vous d'avoir choisi une image en PNG/png, JPG/jpg ou GIF/gif  , merci !"); 
                     }  
                     elseif($uplaod_status==1) {
                            $db->exec("UPDATE partenaire set enseign='".$nom_partenaire."' , site_web='".$site_partenaire."', logo='".$uplaod_name."'  where id='".$id_p."' ");
                            
                           notification("success","Modification efféctuée avec success");                        
                           unset($_POST); 
                           $_POST = Null;           
       
                     }                    
               } 
      }
      if(empty($logo_tmp_name)){   

                 if (!empty($nom_partenaire) and !empty($site_partenaire)) {
                        $db->exec("UPDATE partenaire set enseign='".$nom_partenaire."' , site_web='".$site_partenaire."' where id='".$id_p."' ");
                        notification("success","Modification efféctuée avec success");                        
                        unset($_POST); 
                        $_POST = Null;           
       
                     }                    
                  elseif(empty($nom_partenaire) or empty($site_partenaire)) {    
                   notification("danger","il ya des informations manquants dans le formulaire");           
                 }           
                     
      }
   
  }
  else{
    notification("danger","Oups! quelque chose s'est mal passée, si cela persiste veuillez contacter le webmaster");
  } 
  
 }

