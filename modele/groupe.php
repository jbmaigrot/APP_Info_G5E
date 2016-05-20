<?php

function recupere_membre(){
	global $mysqli;
	
	$requete=$mysqli->query('SELECT id_membre FROM groupeuser WHERE id_groupe = "'.$_GET['id'].'"');
	$idmembre = array();
	while($infos=$requete->fetch_array()){
		$idmembre[] = $infos;
	}
	return $idmembre;
}
//--------------------------------------------//
function identifier_membre($id){
	global $mysqli;
	
	$requete=$mysqli->query('SELECT * FROM utilisateurs WHERE id = "'.$id.'"');
	$membre = array();
	while($infos=$requete->fetch_array()){
		$membre[] = $infos;
	}
	return $membre;
}
//-----------------------------------------------//
function verifier_membre(){
	global $mysqli;
	
	$requete=$mysqli->query('SELECT id_membre FROM groupeuser WHERE id_groupe = "'.$_GET['id'].'" AND id_membre="'.$_SESSION['id'].'"');
	$idmembre = array();
	while($infos=$requete->fetch_array()){
		$idmembre[] = $infos;
	}
	return $idmembre;
}
function lister_groupe(){
	global $mysqli;
	$requete=$mysqli->query("SELECT groupe.* FROM groupe  LEFT JOIN groupeuser  ON groupeuser.id_groupe = groupe.id ORDER BY groupeuser.id DESC");
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;
}
function dernier_groupe(){
	global $mysqli;
	$requete=$mysqli->query('SELECT * FROM groupe ORDER BY id DESC limit 3 ');
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;
}
function dernier_groupe_dep($dep){
	global $mysqli;
	$requete=$mysqli->query('SELECT * FROM groupe WHERE departement="'.$dep.'" ORDER BY id DESC limit 3 ');
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;
}
