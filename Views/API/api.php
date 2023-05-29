<?php 
    
header('Access-Control-Allow-origin:*');
header('Access-Control-Allow-Headers:*');
header('Containt-Type:application/json;charset=UTF-8');  

require "Views/API/Config/DataBase.php";
$con = new DataBase();
$db_conneted=$con->db_con();

// récuperation des informations de la base de données
// **************************
// blog
// **************************
// récuperation des articles de blog
if (isset($_GET['blog'])) {
    $value= $_GET['blog'];
    $indice = 1;     
    if($indice == $value){
         $query="SELECT * from publications  ORDER BY id_publication DESC ";      
         $recup_ds= $db_conneted->query($query); 
         $recup_ds->execute();
         $all_posts= $recup_ds->fetchAll(PDO::FETCH_OBJ);

         if($all_posts){        
            $return["posts"]=$all_posts;
         }else{
            $return['error']="veuillez specifier le type des données aux quelles vous voulez accèder ...." ;
         }
    }
    else{
         $return['error']['message']="indice indefinie";
    }
}
// récuperation des articles de blog par id
elseif (isset($_GET['post'])) {
  $id=$_GET['post']; 
  if (is_numeric($id)){
    $query= $db_conneted->query(" SELECT * from publications WHERE id_publication='".$id."'  ");  
    $post= $query->fetchAll(PDO::FETCH_OBJ);
    $return=$post[0];
  }
  elseif (!is_numeric($id)){
    $return["error"]="id invalid";
  }    
}
// **************************
// podcats
// **************************
// récuperation des intros des podcasts
if (isset($_GET['podcasts'])) {
    $value= $_GET['podcasts'];       
    if($value==0){
        // 🉑 idee: recuperer les podcasts par tag soit parent ou child
         $query="SELECT * from podcasts  where tag='parent' and parent=0 ORDER BY id DESC ";      
         $recup_ds= $db_conneted->query($query); 
         $recup_ds->execute();
         $all_posts= $recup_ds->fetchAll(PDO::FETCH_OBJ);

         if($all_posts){        
            $return["podcasts"]=$all_posts;
         }else{
            $return['error']="veuillez specifier le type des données aux quelles vous voulez accèder" ;
         }
    }
    else{
         $return['error']['message']="indice indefinie";
    }
}
// récuperation des espisodes podcasts par série

if (isset($_GET['datas']) && isset($_GET['parent'])) {

     $type= $_GET['datas'];
     $parent= $_GET['parent']; 
   

    if($type =="podcasts" && $parent !=""){
        // 🉑 idee: recuperer les podcasts par tag soit parent ou child
         $query="SELECT * from podcasts  where parent='$parent' and tag='child' ORDER BY id DESC ";      
         $recup_ds= $db_conneted->query($query); 
         $recup_ds->execute();
         $all_posts= $recup_ds->fetchAll(PDO::FETCH_OBJ);

         if($all_posts){        
            $return["posts"]=$all_posts;
         }else{
            $return['error']="aucune donnée n'est disponible" ;
         }
    }
    else{
         $return['error']['message']="indice indefinie";
    }
}
// récuperation des podcasts par id
elseif (isset($_GET['data'])) {
  $id=$_GET['data']; 
  if (is_numeric($id)){
    $query= $db_conneted->query(" SELECT * from podcasts WHERE id='".$id."'  ");  
    $post= $query->fetchAll(PDO::FETCH_OBJ);
    $return=$post[0];
  }
  elseif (!is_numeric($id)){
    $return["error"]="id invalid";
  }    
}
// **************************
// configurations
// **************************
if (isset($_GET['configurations'])) {
    $value= $_GET['configurations'];       
    if($value == 1){
        // 🉑 idee: recuperer les podcasts par tag soit parent ou child
         $query="SELECT * from configurations  where tag='gofm' ";      
         $recup_ds= $db_conneted->query($query); 
         $recup_ds->execute();
         $all_posts= $recup_ds->fetchAll(PDO::FETCH_OBJ);

         if($all_posts){        
            $return["configurations"]=$all_posts;
         }else{
            $return['error']="veuillez specifier le type des données aux quelles vous voulez accèder" ;
         }
    }
    else{
         $return['error']['message']="indice indefinie";
    }
}
// récuperation des intros des podcasts
elseif(!isset($_GET['datas']) or !isset($_GET['post'])) {
  $return['error']="veuillez specifier le type des données aux quelle vous voulez accèder";  
}         
echo  json_encode($return, JSON_UNESCAPED_UNICODE);

     ?>
    
