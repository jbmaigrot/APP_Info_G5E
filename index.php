<?php

include 'modele/connexion_sql.php';
include 'modele/groupe.php';
include 'modele/utilisateur.php';
include 'modele/geographie.php';
include 'modele/sport.php';


if(isset($_GET['page']) && !empty($_GET['page'])) {

    $action = $_GET['page'];

} else {

    $action = 'accueil';
}

 if (isset($_GET['lang']))
    {
        $lang = $_GET['lang'];
    }
    else
    {
        if (isset($_COOKIE['lang']))
        {
            $lang = $_COOKIE['lang'];
        }
        else
        {
            // si aucune langue n'est déclarée on tente de reconnaitre la langue par défaut du navigateur
            $lang = 'fr';
        }
    }
 
 
    if (($lang === 'fr') OR ($lang === 'en'))
    {          
 
        //enregistrement du cookie au nom de lang
        setcookie("lang", $lang, time() + 365 * 24 * 3600);
        //echo 'Cookie : '.$_COOKIE['lang'];  
 
        include('Vue/text'.strtoupper($lang).'.php');
         
    }
    else
    {
        include('fr.php');
    }

ob_start();

if(is_file('controleur/' . $action . '.php')) {

    include 'controleur/' . $action . '.php';

} else {

    include 'vue/404.php';
}

$contenu = ob_get_contents();

ob_end_clean();

    



if ($action!='connexion'){
    include('vue/header.php');
}

echo $contenu;

include ('vue/footer.php');