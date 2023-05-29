<?php 
  //  ce lien recupere les fonctions liées à aux notification 
  require "Views/dashboard/Control/coeur/returnedNotifications.php";
  require "Views/dashboard/Control/coeur/upload_file.php";

   // tous les articles
    require 'db.php';
    global $post;
 $recup_data_for_pagination= $db->query("SELECT * FROM publications ORDER BY id_publication DESC"); 
while ($all_posts_for_pagination =  $recup_data_for_pagination->fetch()){
    $posts_for_pagination[]=$all_posts_for_pagination;
}
  // End  tous les articles 

  // Modification geting id
    if(isset($_GET['ilqvkdvvufhf'])){
      
      $id= htmlspecialchars($_GET['ilqvkdvvufhf']);
      if (is_numeric($id)) { 
         
         $query= $db->query("SELECT * FROM publications WHERE id_publication='".$id."'");  
         $updatble= $query->fetch();
         //var_dump($updatble);
         if(!empty($updatble)){
            $edit_me=$updatble;
         }
         elseif(empty($updatble)){
          notification("danger","aucune publication ne correspond à votre recherche");
         }
      }
      elseif(!is_int($id)){      
        notification("danger","aucun resultat n'a eté trouvé");
      }
      
    }
  // End Modification geting id



function new_article(){
    
require 'db.php';
  if(isset($_POST['titre'],$_POST['categorie'],$_POST['details'],$_POST['slug'],$_FILES['pictures'])
  ){
        

        $titre= htmlspecialchars($_POST['titre']);
        $categorie= htmlspecialchars($_POST['categorie']);
        $details= $_POST['details'];
        $slugs= htmlspecialchars($_POST['slug']);
        $slug=str_replace(" ","-", $slugs);

        $img= $_FILES['pictures'];
      
       
        if(!empty($titre) AND !empty($categorie) AND !empty($details) AND !empty($slug) AND !empty($img)){
              
            $strlen=strlen($titre);    
            
               if($strlen <= 10) {
                  notification("danger","Veuillez choisir un titre valité pour l'article, au minum 10 caracteres");
               }
               elseif($strlen > 250){
                  notification("danger","Veuillez choisir un titre moins long");              
               }
               elseif($strlen <= 250 AND $strlen > 10){
                 
                  $imagemisenavant= new upload_file();
                  upload_file::upload($_FILES['pictures']);
                  $uplaod_status=upload_file::$upload_cod;
                  $uplaod_name = upload_file::$name_to_up;
                
                    if($uplaod_status==1) {


                        $datedecreation= date('Y-m-d H:i:s');

                       $query = "INSERT into publications (titre,contenu,categorie,slug,mydate,imagenavant) values (?,?,?,?,?,?)"; 
                       $tatement = $db->prepare($query);
                       $insertion = $tatement->execute([$titre,$details,$categorie,$slug,$datedecreation,$uplaod_name]);

                      if($insertion ){

                          notification("success","Modification effectuée avec success /////");
                         
                
                      }
                      else{
                       notification("danger","impossible de d'effectuer la modification démandé, veuillez verifier les contenus des champs");
                   } 
                        unset($_POST); 
                        $_POST = Null;
                    } 
                    elseif($uplaod_status !=1) {
                         notification("danger","Vous devez choisir une image pour la publication");                       
                        
                    }             
                  
              }
          
        }
        elseif(empty($_POST['titre']) or empty($_POST['categorie']) or empty($_POST['details']) or empty($_POST['slug'] && empty($img))) {    
         notification("danger","Veuillez ne pas laisser aucun champs vide");
        }
        else{
             notification("danger","Veuillez ne pas laisser des champs vide");
        }

  }
  else{
    notification("danger","Erreur inconu, veuillez contacter l'administrateur");
  } 
  
 }













function update_article(){
    
   require 'db.php';
// -----------------
  if(isset($_POST['titre'],$_POST['categorie'], $_POST['details'],$_POST['slug'],$_FILES['pictures'],$_GET['ilqvkdvvufhf'])){
        
        //initialisation des variables
        $titre= htmlspecialchars($_POST['titre']);
        $categorie= htmlspecialchars($_POST['categorie']);
        $details= $_POST['details'];
      
        $slugs= htmlspecialchars($_POST['slug']);
        $slug=str_replace(" ","-", $slugs);      
        $img= $_FILES['pictures']; 
        $img_tmp_name= $_FILES['pictures']['tmp_name'];

       
        $id_up= htmlspecialchars($_GET['ilqvkdvvufhf']);  

        
        // ----------------------------

        if (!empty($img_tmp_name)) {

          if(!empty($titre) AND !empty($categorie) AND !empty($details) AND !empty($slug)){  
              
               $update_imagemisenavant= new upload_file();
               upload_file::upload($_FILES['pictures']);
               $uplaod_status=upload_file::$upload_cod;
               $uplaod_name=upload_file::$name_to_up;

             if($uplaod_status==1) {

                 $tatemament_with_img=$db->query(" UPDATE publications set titre='".$titre."', contenu='".$details."', categorie ='".$categorie."', slug='".$slug."', imagenavant='".$uplaod_name."' where id_publication='".$id_up."'"); 
                 $query = " UPDATE publications set titre=?, contenu=?, categorie =?, slug=?, imagenavant=? where id_publication=?"; 
                 $tatement =  $db->prepare($query);
                 $insertion = $tatement->execute([$titre,$details,$categorie,$slug,$uplaod_name,$id_up]);

                notification("success","Modification effectuée avec success /////");
                         
                
              }
              elseif ($uplaod_status=0) {
                  notification("danger","impossible de d'effectuer la modification démandée, rassurez que d'avoir choisi une image en png, jpeg, jpg ou un Gif");
              }
                      
            }
            elseif(empty($_POST['titre']) or empty($_POST['categorie']) or empty($_POST['details']) or empty($_POST['slug'] or empty($img))) {    
             notification("danger","Veuillez plutôt remplacer le contenu existant mais ne laissez pas des champs vide");
            }
         }










         elseif (empty($_FILES['pictures']['tmp'])) {

            if(!empty($titre) AND !empty($categorie) AND !empty($details) AND !empty($slug)){        
               
               $query = " UPDATE publications set titre=?, contenu=?, categorie =?, slug=? where id_publication=?"; 
               $tatement =  $db->prepare($query);
               $tatemament_without_img = $tatement->execute([$titre,$details,$categorie,$slug,$id_up]);
               if($tatemament_without_img){

                    notification("success","Modification effectuée avec success....");
               }        
                else{
                       notification("danger","impossible de d'effectuer la modification démandé, veuillez verifier les contenus des champs");
                   } 
            }   
               elseif(empty($_POST['titre']) or empty($_POST['categorie']) or empty($_POST['details']) or empty($_POST['slug'] or empty($img))) {    
             notification("danger","Veuillez plutôt remplacer le contenu existant mais ne laissez pas des champs vide");
            }                    
         }
         




         else{
             notification("danger","Veuillez contacter l'administrateur");
         }


        }
}







function delete_article(){
   require 'db.php';
   if(isset($_POST['id_to_delete']) ){       

        $id= htmlspecialchars($_POST['id_to_delete']);
        $suppression= $db->query("DELETE from publications where id_publication='".$id."'"); 
        if($suppression){
            notification("success","Suppression effectuée avec success !");            
            unset($_POST);
        }
        else{
            notification("danger","Une erreure s'est produite");  
        }

   }
    
 }
?>