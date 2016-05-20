<?php
include_once('modele/controle_id.php');
$erreur_connexion='';
if(isset($_POST['email']) AND isset ($_POST['mot_de_passe'])){

	if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['email'])) {
	$infos=controle_id( $_POST['email'], $_POST['mot_de_passe']);
		if (isset($infos['email'])){
		 $erreur_connexion='great job';
		 header('location:controleur/accueil.php');
		}
		else{
		 $erreur_connexion='login ou mot de passe incorrect ';
		}
	} 
	else {
		 echo 'Cet email a un format non adapté.';
	}
	
}
include('../vue/header.php');
include_once('vue/index.php');
?>