<?php
/*include('modele/recupere_region.php');
include ('modele/creer_groupe.php');

if(connecte()){
	if (isset ($_GET['id_region'])){
		$departement= recupere_dep($_GET['id_region']); 
		echo '
		<option>----Departement-----</option>';
		foreach ($departement as $key => $output) {
			echo'<option value="'.$output['departement'].'">'.utf8_encode($output['departement']).'</option>';
		}
		
		exit();
	}
	if (isset($_POST['nom_du_groupe']) AND isset($_POST['sport']) AND isset($_POST['nombre_de_membres'])AND isset($_POST['region'])
	AND isset($_POST['description_groupe'])){
		if (!empty($_POST['nom_du_groupe']) AND !empty($_POST['sport']) AND !empty($_POST['nombre_de_membres'])AND !empty($_POST['region']) AND isset($_POST['departement']) AND !empty($_POST['departement'])
		AND !empty($_POST['description_groupe'])){
			$id = creer_groupe($_POST['nom_du_groupe'], $_POST['sport'] , $_POST['nombre_de_membres'], $_POST['region'], $_POST['departement'], $_POST['description_groupe']);
			inserer_utilisateur_groupe($_SESSION['id'],$id);
			header('Location:?page=groupe&id='.$id);
		}
		else {
				echo "erreur tous les champs n'ont pas été remplis";
		}

		} 
		$sport=recupere_sport();
		$region= recupere_region();
}
else{
	header('location:?page=connexion');
}
*/

include_once('vue/profil.php');