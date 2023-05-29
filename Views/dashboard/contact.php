 <?php  

require "Views/PHPMailer/PHPMailerAutoload.php";
require "Views/PHPMailer/class.phpmailer.php";
require "Views/PHPMailer/class.smtp.php";

 
function contact(){


require "Views/dashboard/Control/coeur/recup_data/configurations.php";
 if(isset($_POST['contact_nom'],$_POST['contact_objet'],$_POST['contact_email'],$_POST['contact_message'])){
       
       $name= htmlspecialchars($_POST['contact_nom']);
       
       $to=$configuration_x['email'];
      echo $to;

      
       $auth= $_POST['contact_email'];
       $body= htmlspecialchars($_POST['contact_message']);       
       $subject= htmlspecialchars($_POST['contact_objet']);
    if(!empty($name) AND !empty($auth) And !empty($body)){

   $mail= new phpmailer(true);
    
$mail->isSMTP();
$mail->SMTPDEbug =3;
$mail->Host ='smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username="eliezerconsulting@gmail.com";
$mail->Password='kercpdgpjzokbyvc';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->isHTML(true);
$mail->setFrom($auth,$name);

$mail->addAddress($to);
$mail->addReplyTo($auth,$name);

$mail->Subject =("$subject");
$mail->Body = $body;
if($mail->send()){
   echo"
            <div style='color:#00000F;background:#D9D9D9; font-weight:bold;padding:4px 10px; margin-bottom:20px;'>
             Message Reçu avec success , nous reviendrons ves vous le plus vite possible
             </div>";
  echo " <script type='text/javascript'>
               $('.contact_nom').val('');  
               $('.contact_email').val('');  
               $('.contact_message').val(''); 
               $('.contact_objet').val(''); 
             </script>";  

}
else{            
        echo   $mail->ErrorInfo;
             
 

}
  
}
else{            
             echo"
              <div style='color:red;background:#D9D9D9; font-weight:bold;padding:9px 10px; margin-bottom:20px;'>

             Merci de bien vouloir remplir tous les  champs ci-dessus !
             </div>";
             
           
      }
 }
}
if(isset($_POST['submitContact'])){
       // contact(); 
    if(isset($_POST['g_recaptcha'])){
      $secretkey="6Le6JUYjAAAAADwxrdCBES0DvVqPQs2BxpVjPdyO";
      $token=$_POST['g_recaptcha'];
      $ip = $_SERVER['REMOTE_ADDR'];
      
      $url ="https://www.google.com/recaptcha/api/siteverify?secret=".$secretkey."&response=".$token."&remoteip=".$ip;

      $request = file_get_contents($url);
      $response= json_decode($request);

    
  
    if($response->success){
      contact(); 
    }
    else{
       echo"
              <div style='color:red;background:#D9D9D9; font-weight:bold;padding:9px 10px; margin-bottom:20px;'>

             Impossible de valider le Captcha
             </div>";
    }
  
}
      
}