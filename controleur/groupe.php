<?php 

if (isset($_GET['id'])){

	include('modele/creer_groupe.php');
	include('modele/groupe.php');
	include('modele/accueil.php');
	$test = generer_groupe($_GET['id']);
	$test2=verifier_membre();
	if(!empty($test2)){
		if(isset($_POST['quitter'])){
			supprimer_utilisateur_groupe($_SESSION['id'], $_GET['id']);
		}

	}
	else {
		if(isset($_POST['rejoindre'])){
			inserer_utilisateur_groupe($_SESSION['id'], $_GET['id']);
		}
	}
	$test2=verifier_membre();
	
include('vue/groupe1.php');
}
?>

