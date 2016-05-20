 <?php
include_once('modele/controle_id.php');
include('modele/groupe.php');
include_once('modele/creer_id.php');
include_once('modele/inscription_id.php');
include('modele/accueil.php');
include('modele/recupere_region.php');
$erreur_connexion='';
$success=1;
$groupe=dernier_groupe();
$departement=listedepartement();

	
if(isset($_POST['mail']) AND isset ($_POST['pwd'])){

	if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['mail'])) {
	$infos=controle_id( $_POST['mail'], $_POST['pwd']);
		if (isset($infos['email'])){
		 $erreur_connexion='great job';
		 $_SESSION['id']=$infos['id'];
		 $_SESSION['departement']=$infos['departement'];
		 $_SESSION['pseudo']=$infos['pseudo'];
		header('location:?page=accueil');
		}


		else{

		 $erreur_connexion='login ou mot de passe incorrect ';
		}
	} 
	else {
		 $erreur_connexion= 'Cet email a un format non adapté.';

	}

	
}

elseif (isset($_POST['pseudo']) AND isset($_POST['email']) AND isset($_POST['departement'])AND isset($_POST['mot_de_passe'])AND isset($_POST['confirmation_mot_de_passe'])
 AND isset($_POST['sexe'])){


	if(!empty($_POST['pseudo'])&&!empty($_POST['email'])&&!empty($_POST['departement'])&&!empty($_POST['mot_de_passe'])&&!empty($_POST['confirmation_mot_de_passe'])
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
					creer_id($_POST['pseudo'],$_POST['email'], $_POST['departement'],$_POST['mot_de_passe'],$_POST['sexe']);
	
			
				}
				echo $erreur_connexion;
				echo $success;
				var_dump($_POST);
	}

include('vue/COJS.php');
?>