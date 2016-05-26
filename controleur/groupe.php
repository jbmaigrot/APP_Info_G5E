<?php 

if (isset($_GET['id'])){
	$statut=getStatut($_GET['id'],$_SESSION['id']);
	$test = generer_groupe($_GET['id']);
	$test2=verifier_membre();
	$message=lister_message($_GET['id']);
	$sport=recupere_sport();
	 $d=count(recupere_membre($_GET['id']));
if ($d==0){

	supprimer_groupe($_GET['id']);
	header('location:?page=accueil');
}
if(isset ($_POST['edit'])){
	header('location:?page=editgroupe&id='.$_GET["id"]);
}
	if(!empty($test2)){
		if(isset($_POST['quitter'])){
			if ($d==1){
				supprimer_groupe($_GET['id']);
				header('location:?page=accueil');
			}
			else{
			supprimer_utilisateur_groupe($_SESSION['id'], $_GET['id']);}

		}


	}
	else {
		if(isset($_POST['rejoindre'])){
			$stat="invite";
			inserer_utilisateur_groupe($_SESSION['id'], $_GET['id'],$stat);
		}
	}
	$statut=getStatut($_GET['id'],$_SESSION['id']);
	$test2=verifier_membre();
	

	if(isset($_POST['message'])&&!empty($_POST['message'])){
		echo "string2";
		$D=date('Y-m-d H:i:s');
		$infos=identifier_membre($_SESSION['id']);
		inserer_message_groupe($_SESSION['id'],$_GET['id'],$_POST['message'],$D);
		$contenue=$_POST['message'];
		}
	

	$message=lister_message($_GET['id']);
	if(isset($_POST['nom'])&&isset($_POST['sport'])&&isset($_POST['adresse'])&&isset($_POST['description'])&&isset($_POST['niveau'])&&isset($_POST['nombre'])){
	if (isset($_POST['Annee'])&&isset($_POST['mois'])&&isset($_POST['Jour'])&&isset($_POST['heure'])&&isset($_POST['minute'])){
		$dateevent="{$_POST['Annee']}-{$_POST['mois']}-{$_POST['Jour']} {$_POST['heure']}:{$_POST['minute']}";
		$tmp=date_create($dateevent);
		$dateevent2=date_format($tmp,"Y-m-d H:i");
	 	echo $dateevent2;
	 	if(!empty($_POST['nom'])&&!empty($_POST['adresse'])&&!empty($_POST['description'])&&!empty($_POST['niveau'])&&!empty($_POST['nombre'])){
	 		creer_event($_POST['nom'], $_POST['sport'],$dateevent2,$_POST['adresse'],$_POST['description'],$_POST['niveau'],$_POST['nombre'], $_GET['id']);
	 	}
}}

	
	
include('vue/groupe.php');
}
?>

