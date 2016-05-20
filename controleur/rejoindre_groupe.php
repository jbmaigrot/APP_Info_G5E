<?php 

include('modele/accueil.php');
include('modele/groupe.php');


if (isset($_SESSION['id'])){
	if(isset($_GET['requete']) && $_GET['requete'] != NULL){
		$requete = htmlspecialchars($_GET['requete']);
		$recherche=recherche($requete);

$test=lister_groupe();

	}
include('vue/accueil.php');
}
else{
	header('location:?page=connexion');
}


?>
 