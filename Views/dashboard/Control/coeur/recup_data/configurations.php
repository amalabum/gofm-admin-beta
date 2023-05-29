<?php 

require "Views/dashboard/Control/coeur/db.php";

//recuperation des configurations du site

$recup_configs= $db->query("SELECT * FROM configurations where id=2023");
$configuration_x= $recup_configs->fetch();

// equipe
$recup_team= $db->query("SELECT * FROM team ORDER BY id DESC limit 7");
while ($all_team =  $recup_team->fetch()){
    $equipe[]=$all_team;
 }
//recuperation des publications

//recuperation des publications pour la pagination
$recup_data_for_pagination= $db->query("SELECT * FROM publications ORDER BY id_publication DESC"); 
while ($all_posts_for_pagination =  $recup_data_for_pagination->fetch()){
    $posts_for_pagination[]=$all_posts_for_pagination;
}
//recuperation des publications pupulaires
$recup_populars_publications= $db->query("SELECT * FROM publications ORDER BY id_publication DESC limit  4"); 
while ($all_populars_publications =  $recup_populars_publications->fetch()){
    $posts_populars[]=$all_populars_publications;
}
//recuperation des categories
$recup_des_categories= $db->query("SELECT DISTINCT categorie  FROM publications "); 
while ($all_categories =  $recup_des_categories->fetch()){
    $categories[]=$all_categories;
}

$recup_des_categories= $db->query("SELECT DISTINCT categorie  FROM publications ORDER BY id_publication DESC limit 4"); 
while ($all_categories =  $recup_des_categories->fetch()){
    $categories_recents[]=$all_categories;
}

// $recup_last_publication= $db->query("SELECT * FROM publications ORDER BY id_publication DESC limit  1"); 
// while ($last_publication =  $recup_last_publication->fetch()){
//     $actu[]=$$last_publication;
// }

$actualit= $db->query("SELECT * FROM publications ORDER BY id_publication DESC limit  1"); 
$actu =  $actualit->fetch();

//recuperation des partenaires
$recup_partenaires= $db->query("SELECT * FROM partenaire ORDER BY id DESC limit 6"); 
while ($all_partenaires =  $recup_partenaires->fetch()){
    $partenaires[]=$all_partenaires;
}


?>