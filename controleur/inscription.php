<?php
include_once('modele/creer_id.php');
include_once('modele/inscription_id.php');

$success=1;
if (isset($_POST['pseudo']) AND isset($_POST['email']) AND isset($_POST['ville'])AND isset($_POST['mot_de_passe'])AND isset($_POST['confirmation_mot_de_passe'])
AND isset($_POST['age']) AND isset($_POST['sexe'])){

	if(!empty($_POST['pseudo'])&&!empty($_POST['email'])&&!empty($_POST['ville'])&&!empty($_POST['mot_de_passe'])&&!empty($_POST['confirmation_mot_de_passe'])&&!empty($_POST['age'])
	&&!empty($_POST['sexe'])){
		if(strlen($_POST['pseudo'])<=20){
		}
		else{
			$erreur_connexion='le pseudo doit être moins long' ;
			$success=0;
		}
		if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['email'])) {
			if (empty(inscription_id($_POST['email'],$_POST['pseudo']))){
					}			
					else{
						$erreur_connexion='Adresse e-mail deja utilisé';
						$success=0;
						}
		}
		else{
			$erreur_connexion='Adresse e-mail invalide';
						$success=0;

			}
		if($_POST['mot_de_passe']==$_POST['confirmation_mot_de_passe']){		
		}
		else{
			$erreur_connexion='mot de passes non identiques';
						$success=0;
		}
	}
	else{
	$success=0;
	$erreur_connexion='tous les champs avec des * sont obligatoire';
				}
				if ($success==1){
					creer_id($_POST['pseudo'],$_POST['email'], $_POST['ville'],$_POST['mot_de_passe'],$_POST['age'],$_POST['sexe']);
				}

		}

include_once('vue/inscription.php');
?>