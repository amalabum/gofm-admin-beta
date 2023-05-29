
<?php 

require "Views/dashboard/Control/coeur/returnedNotifications.php";
require "Views/dashboard/Control/coeur/upload_file.php";
          require 'Views/dashboard/Control/coeur/db.php';    
           if(isset($_POST['search_by_day'])){
                 $table=$_POST['search_by_day'];
              

 $recup_datas= $db->query("SELECT * FROM `$table` ORDER BY id DESC ");
 while ($all_programs =  $recup_datas->fetch()){
    $programmes[]=$all_programs;
 }
              }
               else{
                 
 $recup_datas= $db->query("SELECT * FROM programme_lundi ORDER BY id DESC ");
 while ($all_programs =  $recup_datas->fetch()){
    $programmes[]=$all_programs;
 }
               }

// Modification geting id and table
    if(isset($_GET['id_program'],$_GET['journée'])){      
   
      $id= htmlspecialchars($_GET['id_program']);
      $table= htmlspecialchars($_GET['journée']);
      // echo $id;
     
      if (is_numeric($id) and is_string($table)) { 
 

      if ($table=="programme_lundi" or $table=="programme_mardi" or $table=="programme_mercredi" or $table=="programme_jeudi" or $table=="programme_vendredi" or $table=="programme_samedi" or $table=="programme_dimanche") {
        $query= $db->query("SELECT * FROM `$table` WHERE id='".$id."'");  
        $updatble= $query->fetch();
           if(!empty($updatble)){
             $edit_me=$updatble;

             $id_anim1=$edit_me['animateur1'];
             $id_anim2=$edit_me['animateur2'];             

             $query_animateur1=$db->query("SELECT nom from team where id=$id_anim1");
              $animateur1= $query_animateur1->fetch();
             //var_dump($animateur1);
              echo "<br>";
             
              if(!empty($query_animateur2)){
$query_animateur2=$db->query("SELECT nom from team where id=$id_anim2");
$animateur2= $query_animateur1->fetch();

              }
             
             $recup_team= $db->query("SELECT * FROM team ");
             while ($all_team =  $recup_team->fetch()){
             $team[]=$all_team;

             }
            
             
             //var_dump($animateur2);
         }
         elseif(empty($updatble)){
          notification("danger","aucun agent ne correspond à votre recherche");
         }
        
      }
      else{
        notification("danger","aucun resultat n'a eté trouvé, paramettre invalide");
      }     
        
        
        
      }
      elseif(!is_int($id)){      
        notification("danger","aucun resultat n'a eté trouvé");
      }
      
     }


// ajouter un programme
function un_nouveau_programme(){    
  require 'db.php';
  if(isset($_POST['titre_prog'],$_POST['date_prog'],$_POST['debut_prog'],$_POST['merid_1'],$_POST['fin_prog'],$_POST['merid_2'],$_POST['animateur_1'],$_POST['animateur_2'],$_FILES['cover'])){        
        
        $titre_prog= htmlspecialchars($_POST['titre_prog']);

        $date_prog= htmlspecialchars($_POST['date_prog']);

        $debut_prog= htmlspecialchars($_POST['debut_prog']);
        $merid_1= htmlspecialchars($_POST['merid_1']);

        $fin_prog= htmlspecialchars($_POST['fin_prog']);
        $merid_2= htmlspecialchars($_POST['merid_2']);

        $animateur_1= htmlspecialchars($_POST['animateur_1']);
        $animateur_2= htmlspecialchars($_POST['animateur_2']);

        $cover_tmp_name= $_FILES['cover']['tmp_name']; 
        $cover= $_FILES['cover'];

        if(!empty($titre_prog) AND !empty($date_prog) AND !empty($debut_prog) AND !empty($merid_1) AND !empty($fin_prog) AND !empty($merid_2) AND !empty($animateur_1) AND !empty($cover_tmp_name)){

                    $imagemisenavant= new upload_file();
                    upload_file::upload($cover);
                    $uplaod_status=upload_file::$upload_cod;
                    $uplaod_name = upload_file::$name_to_up;
                
                     if($uplaod_status==1) {
                          $db->exec("INSERT into `$date_prog` (titre,animateur1,animateur2,debut,fin,meridien_debut,meridien_fin,cover) values ('$titre_prog','$animateur_1',$animateur_1=NULL,'$debut_prog','$fin_prog','$merid_1','$merid_2','$uplaod_name')");               
                        
                           notification("success"," Proramme ajouté avec success");                        
        //                    unset($_POST); 
        //                    $_POST = Null;
                   } 
                   elseif($uplaod_status==0) {
                   notification("danger","Il y'a un probleme avec le fichier choisi, rassurez-vous d'avoir choisi une image en PNG/png, JPG/jpg ou GIF/gif  , merci !");                    }              
          }
         elseif(empty($titre_prog) or empty($date_prog) or empty($debut_prog) or empty($merid_1) or empty($fin_prog) or empty($merid_2)or empty($animateur_1)or empty($cover_tmp_name)) {    
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

function modification_programme(){  

  require 'db.php';
  if(isset($_GET['id_program'],$_GET['journée'],$_POST['titre_prog'],$_POST['date_prog'],$_POST['debut_prog'],$_POST['merid_1'],$_POST['fin_prog'],$_POST['merid_2'],$_POST['animateur_1'],$_POST['animateur_2'],$_FILES['cover'])){        
        

        $id= htmlspecialchars($_GET['id_program']);
        $table= htmlspecialchars($_GET['journée']);

        $titre_prog= htmlspecialchars($_POST['titre_prog']);
        $titre_prog= htmlspecialchars($_POST['titre_prog']);

        $date_prog= htmlspecialchars($_POST['date_prog']);

        $debut_prog= htmlspecialchars($_POST['debut_prog']);
        $merid_1= htmlspecialchars($_POST['merid_1']);

        $fin_prog= htmlspecialchars($_POST['fin_prog']);
        $merid_2= htmlspecialchars($_POST['merid_2']);

        $animateur_1= htmlspecialchars($_POST['animateur_1']);
        $animateur_2= htmlspecialchars($_POST['animateur_2']);

        $cover_tmp_name= $_FILES['cover']['tmp_name']; 
        $cover= $_FILES['cover'];

        if(!empty($cover_tmp_name)){
                    
              if(!empty($titre_prog) AND !empty($date_prog) AND !empty($debut_prog) AND !empty($merid_1) AND !empty($fin_prog) AND !empty($merid_2) AND !empty($animateur_1) AND !empty($cover_tmp_name)){
                  $imagemisenavant= new upload_file();
                  upload_file::upload($cover);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;

                     if($uplaod_status==0) {
                       notification("danger","Il y'a un probleme avec le fichier choisi, rassurez-vous d'avoir choisi une image en PNG/png, JPG/jpg ou GIF/gif  , merci !"); 
                     }  
                     elseif($uplaod_status==1) {


                        //  titre,animateur1,animateur2,debut,fin,meridien_debut,meridien_fin,cover
                        //  $db->exec("UPDATE $table set titre='".$titre_prog."' , animateur1='".$animateur_1."', animateur2='".$animateur_2=NULL."', debut='".$debut_prog."', fin='".$fin_prog."', meridien_debut='".$merid_1."',meridien_fin='".$merid_2."', cover='".$uplaod_name."'  where id='".$id."' ");
                       
                        $sql_query = "UPDATE $table set titre=? , animateur1=?, animateur2=?, debut=?, fin=?, meridien_debut=?, meridien_fin=?, cover=?  where id=? ";

                        $statement= $db->prepare($sql_query);
                        $statement->execute([$titre_prog,$animateur_1,$animateur_2=null,$debut_prog,$fin_prog,$merid_1,$merid_2,$id,$uplaod_name]);
                       
                            
                           notification("success","Modification efféctuée avec success");                        
                           unset($_POST); 
                           $_POST = Null;           
       
                     }                    
               } 
      }
      if(empty($cover_tmp_name)){   

                 if(!empty($titre_prog) AND !empty($date_prog) AND !empty($debut_prog) AND !empty($merid_1) AND !empty($fin_prog) AND !empty($merid_2) AND !empty($animateur_1)){
                      
                        // $db->exec("UPDATE $table set titre='".$titre_prog."' , animateur1='".$animateur_1."', animateur2='".$animateur_2."', debut='".$debut_prog."', fin='".$fin_prog."', meridien_debut='".$merid_1."',meridien_fin='".$merid_2."'  where id='".$id."' ");
                        
                        $sql_query = "UPDATE $table set titre=? , animateur1=?, animateur2=?, debut=?, fin=?, meridien_debut=?, meridien_fin=? where id=? ";

                        $statement= $db->prepare($sql_query);
                        $statement->execute([$titre_prog,$animateur_1,$animateur_2=null,$debut_prog,$fin_prog,$merid_1,$merid_2,$id]);
                       
                        notification("success","Modification efféctuée avec success img intact");                        
                               
       
                     }                    
                  elseif(empty($titre_prog) or empty($date_prog) or empty($debut_prog) or empty($merid_1) or empty($fin_prog) or empty($merid_2) or empty($animateur_1)){    
                   notification("danger","il ya des informations manquants dans le formulaire");           
                 }           
                     
      }
   
  }
  else{
    notification("danger","Oups! quelque chose s'est mal passée, si cela persiste veuillez contacter le webmaster");
  } 
  
 }