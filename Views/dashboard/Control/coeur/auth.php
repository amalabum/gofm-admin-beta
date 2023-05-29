<?php 

function new_connetion(){
    require 'db.php';
    if(isset($_POST['email'],$_POST['password'])){
        $email= htmlspecialchars($_POST['email']);
        $password=htmlspecialchars($_POST['password']);
         if(!empty($email) AND !empty($password)){

            $connection= $db->query("SELECT * FROM admins WHERE email='".$email."'");  
            $user= $connection->fetch();
            if (empty($user)) {
                 
                       echo "
                          <div class='col-12 message_error' style='display:block; position: relative;z-index: 100000;
padding: 12px 18px;
      color: red;
      font-family:times;
      font-size: 16px;
      padding-bottom :12px;'>
                            <i>
                              ce compte n'exite pas
                            </i>
                         </div> ";                  
            }
              elseif(!empty($user)){
                $email_for_user=$user['email'];
                $key=$user['password'];

                if ($password == $key) {
                   // session_start();
                    $_SESSION['authified']=$email_for_user;    
                   
                    header('location:admin');
                     exit();
                    
               } 
                elseif ($password != $key) {
                          echo "
                         <div class='col-12 message_error' style='display:block; position: relative;z-index: 100000;
padding: 12px 18px;
      color: red;
      font-family:times;
      font-size: 16px;
      padding-bottom :12px;'>
                            <i>
                              Informations erronées
                            </i>
                         </div> ";
                }
            }
         }
         elseif(empty($email) OR empty($password)){
               echo "
                         <div class='col-12 message_error' style='display:block; position: relative;z-index: 100000;
padding: 12px 18px;
      color: red;
      font-family:times;
      font-size: 16px;
      padding-bottom :12px;'>
                            <i>
                             tous les champs sont requis
                            </i>
                         </div> ";      
         }
    }
}


if(isset($_POST['connection'])){
        new_connetion();    
}
