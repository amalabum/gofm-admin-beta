 <?php 
  $db= new PDO('mysql:host=localhost;dbname=Gofm_db','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 if(isset($_POST['id'],$_POST['nom'],$_POST['email'],$_POST['commentaire'])){
       $nom= htmlspecialchars($_POST['nom']);
       $email= htmlspecialchars($_POST['email']);
       $commentaire= htmlspecialchars($_POST['commentaire']);       
       $id= htmlspecialchars($_POST['id']);

       if(!empty($id) AND !empty($nom) AND !empty($email) And !empty($commentaire)){
       
       
       $sql_query = "INSERT into comments (id_publication,nom,email,commentaire) values (?,?,?,?)";
       $statement= $db->prepare($sql_query);
       $statement->execute([$id,$nom,$email,$commentaire]);
      echo " <script type='text/javascript'>
               $('.nom').val('');  
               $('.email').val('');  
               $('.commentaire').val(''); 
             </script>";           
       }
       else{            
             echo"
               <script type='text/javascript'>
                  alert('Merci de bien vouloir remplir tous les  champs');
               </script>";
      }
 }
