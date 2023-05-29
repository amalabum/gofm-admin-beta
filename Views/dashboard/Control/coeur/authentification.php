<?php 


 function new_connetion(){
    require 'db.php';
        
        if(isset($_POST['email'],$_POST['password'])){
        
        global $error;
        $email= htmlspecialchars($_POST['email']);
        $password=htmlspecialchars($_POST['password']);
            
            if(!empty($email) AND !empty($password)){
            
                $connection= $db->query("SELECT * FROM admins WHERE email='".$email."'");  
                $user= $connection->fetch();
                
                    if (empty($user)) {
                      header('location:login');                      
                      /// echo $error = "Ces informations ne correspondent à aucun compte";                    
                    }
                    if(!empty($user)) {
                       $email_for_user=$user['email'];
                       $pseudo=$user['pseudo'];
                       $role=$user['role'];
                       $key=$user['password'];
                        if ($password == $key) {
                        
                          $_SESSION['authified']=$email_for_user;
                           //echo $_SESSION['authified'];
                          // exit();
                          header('location:admin');
                        } 
                        elseif ($password != $key) {
                          echo $error = "identifients erronées";
                        } 

                   }

                
                   
             }
          
                       
          }
        //elseif(empty($_POST['email']) || empty($_POST['password'])) {    

         // echo"<div class='error' style='color :red;'> rassurez vous que tous les champs ont
         // <br>
          // les contenus demandés</div>";

        //}
     

  }
  if(isset($_POST['connection'])){
        new_connetion();    
  }
  
  // <div class='error'>Une erreur s'est produite, vous devriez songer à contecter l'administrateur</div>



//  function new_connetion(){
//     require 'db.php';     
    
//     if(isset($_POST['email'],$_POST['password'])){
            
//         global $error;
//         $email= htmlspecialchars($_POST['email']);

//         $password=htmlspecialchars($_POST['password']);
             
//         if(!empty($email) AND !empty($password)){
            
//                 $connection= $db->query("SELECT * FROM admins WHERE email='".$email."'");  
//                 $user= $connection->fetch();
                
//                     if (empty($user)) {
//                       header('location:login');
//                       echo $error = "désolé, ce compte n'existe pas"; 
                                        
//                     }
//                     elseif(!empty($user)) {
//                     $email_for_user=$user['email'];
//                     $pseudo=$user['pseudo'];
//                     $role=$user['role'];
//                     $key=$user['password'];
//                     if ($password == $key) {
                        
//                         $_SESSION['authified']=$email_for_user;
//                        *
//                         header('location:admin');

//                     } 
//                     elseif ($password != $key) {
//                      echo $error = "aucun compte n'a eté trouvé";
//                     } 

//                    }             
                   
//                 }
          
                       
//         }
//         elseif(empty($email) || empty($password)) {  
         
//          echo $error = "Ne laissez aucun champs vide";
                 
                
        
     

//   }
//   if(isset($_POST['connection'])){
//         new_connetion();    
//   }
  
 

?>