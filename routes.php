<?php

Routeur::get ("/",function (){
    require "Views/dashboard/Control/formulaires_and_tables/ajouter_un_article.php";
});
Routeur::get ("/home",function (){
    require "Views/index.php";
});


Routeur::get ("/desol",function (){
    require "Views/404.php";
});
Routeur::get ("/adduser",function (){
    require "Views/dashboard/Control/formulaires_and_tables/register.php";
});
Routeur::get ("/ ",function (){
    require "Views/dashboard/Control/formulaires_and_tables/register.php";
});
Routeur::get ("/podcast-new",function (){
    require "Views/dashboard/Control/formulaires_and_tables/new_pdcst_serie.php";
});
Routeur::get ("/add-podcast-on-serie",function (){
    require "Views/dashboard/Control/formulaires_and_tables/ajouter_un_podcat.php";
});

Routeur::get ("/serie-podcasts",function (){
    require "Views/dashboard/Control/formulaires_and_tables/all_series_podcasts.php";
});
Routeur::get ("/updatepodcast",function (){
     require "Views/dashboard/Control/formulaires_and_tables/update_serie.php";
});
Routeur::get ("/podcasts-by-serie",function (){
    require "Views/dashboard/Control/formulaires_and_tables/podcasts-by-serie.php";
});

Routeur::get ("/login",function (){
    require "Views/dashboard/Control/formulaires_and_tables/login.php";
});
Routeur::get ("/myApi",function (){
    require "Views/API/api.php";
});

Routeur::get ("/register",function (){
    require "Views/adminpanel/register.php";
});
Routeur::get ("/authentification",function (){
    require "Views/adminpanel/Control/coeur/authentification.php";
});

//routes pour articles
Routeur::get ("/admin",function (){
    require "Views/dashboard/Control/formulaires_and_tables/ajouter_un_article.php";
});
Routeur::get ("/listedesarticles",function (){
    require "Views/dashboard/Control/formulaires_and_tables/all_articles.php";
});
Routeur::get ("/nouvelarticle",function (){
    require "Views/dashboard/Control/formulaires_and_tables/ajouter_un_article.php";
});
Routeur::get ("/modifierlarticle",function (){
    require "Views/dashboard/Control/formulaires_and_tables/update_article.php";
});
// routes pour l'equipe
Routeur::get ("/ajouter-un-collegue",function (){
    require "Views/dashboard/Control/formulaires_and_tables/add_on_team.php";
});
Routeur::get ("/liste-des-collegues",function (){
    require "Views/dashboard/Control/formulaires_and_tables/all_team.php";
});
Routeur::get ("/modifier-dans-la-team",function (){
    require "Views/dashboard/Control/formulaires_and_tables/edit_on_team.php";
});

//routes pour la configuration du site

Routeur::get ("/adm-modification-de-la-baniere",function (){
    require "Views/dashboard/Control/formulaires_and_tables/website_config_baniere.php";
});
Routeur::get ("/adm-modification-apropos",function (){
    require "Views/dashboard/Control/formulaires_and_tables/website_config_apropos.php";
});
Routeur::get ("/adm-modification-contacts",function (){
    require "Views/dashboard/Control/formulaires_and_tables/website_config_contacts.php";
});
//routes pour les partenaire 

Routeur::get ("/adm-ajouter-un-partenaire",function (){
    require "Views/dashboard/Control/formulaires_and_tables/partenaire_create.php";
});
Routeur::get ("/adm-modification-partenaire",function (){
    require "Views/dashboard/Control/formulaires_and_tables/partenaire_edit.php";
});
Routeur::get ("/admn-tous-partenaires",function (){
    require "Views/dashboard/Control/formulaires_and_tables/partenaire_list.php";
});

// Routeur::get ("/mycrud",function (){
//     require "Views/dashboard/Control/coeur/fonction_crud.php";
// });

//routes pour les programes

Routeur::get ("/adm-ajouter-un-programme",function (){
    require "Views/dashboard/Control/formulaires_and_tables/programme_hebdomadaire_ajouter.php";
});
Routeur::get ("/adm-modification-programme",function (){
    require "Views/dashboard/Control/formulaires_and_tables/programme_hebdomadaire_modifier.php";
});
Routeur::get ("/admn-list-programmes",function (){
    require "Views/dashboard/Control/formulaires_and_tables/programme_hebdomadaire_list.php";
});

Routeur::get ("/resultat-de-la-recherche",function (){
    require "Views/search.php";
});
Routeur::get ("/ensavoirplus",function (){
    require "Views/single.php";
});
Routeur::get ("/qui-sommes-nous",function (){
    require "Views/about.php";
});
Routeur::get ("/contact",function (){
    require "Views/contact.php";
});     
Routeur::get ("/sponsor",function (){
    require "Views/sponsor.php";
}); 
Routeur::get ("/categorie",function (){
    require "Views/categorie.php";
}); 
?>


