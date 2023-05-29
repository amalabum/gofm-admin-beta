<?php 
try {
  //code...

  $db= new PDO('mysql:host=localhost;dbname=Gofm_db','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  } catch (\Exceptions $e) {
  echo $e->getMessage();
}

?>