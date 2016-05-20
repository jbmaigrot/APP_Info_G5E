<?php
function creer_groupe ($nom,$sport,$nombre,$region, $departement, $description){
	global $mysqli;

	$mysqli->query('INSERT INTO groupe SET 	nom="'.$nom.'" ,
											sport ="'.$sport.'",
											nombre_de_membres ="'.$nombre.'",
											id_region="'.$region.'",
											departement ="'.$departement.'",
											description ="'.$description.'"');


	return $mysqli->insert_id;
}

function inserer_utilisateur_groupe ($id_utilisateur, $id_groupe){
	global $mysqli;

	$mysqli->query('INSERT INTO groupeuser SET 	id_membre="'.$id_utilisateur.'" ,
											id_groupe ="'.$id_groupe.'"'
											);

}
function supprimer_utilisateur_groupe ($id_utilisateur, $id_groupe){
	global $mysqli;

	$mysqli->query('DELETE FROM groupeuser WHERE id_membre="'.$id_utilisateur.'" AND
											id_groupe ="'.$id_groupe.'"'
											);

}

function generer_groupe($id){
global $mysqli;
$requete = $mysqli->query('SELECT * FROM groupe WHERE id = "'.$id.'"');
$infos=$requete->fetch_array();
	return $infos;
}

 

function recupere_sport(){
	global $mysqli;
	$requete=$mysqli->query('SELECT nom FROM sport ORDER BY nom');
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;
}






