<?php 
include('modele/accueil.php');
include('modele/groupe.php');



if (connecte()){
	
	if(isset($_GET['requete']) && $_GET['requete'] != NULL){
		$requete = htmlspecialchars($_GET['requete']);
		if($_GET['filtre']=='Groupe'){
		$recherche=rechercheGroupe($requete);
		header('location:?page=accueil&filtre=groupe');
		}
	elseif($_GET['filtre']=='Sport'){
		$recherche=rechercheSport($requete);
	}
	elseif($_GET['filtre']=='Utilisateur'){
		$recherche=rechercheUtilisateur($requete);
	}
	else {
		$recherche=array_merge(rechercheUtilisateur($requete),rechercheSport($requete),rechercheGroupe($requete));
		
	}
	$nbre_resultats=count($recherche);

}

$mes_groupes=recuperer_groupe($_SESSION['id']);
$liste_groupe=lister_groupe();
$liste_groupe_dep=dernier_groupe_dep($_SESSION['departement']);


include('vue/accueil.php');
}

else{
	header("location:?page=connexion");
}


?>