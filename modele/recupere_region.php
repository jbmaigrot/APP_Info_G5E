<?php 
function recupere_region(){
	global $mysqli;
	$requete=$mysqli->query('SELECT * FROM region');
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;


}
function listedepartement(){
	global $mysqli;
	$requete=$mysqli->query('SELECT * FROM departement');
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;


}
//----------------------------//      

function recupere_dep($id_region){
	global $mysqli;
	$requete=$mysqli->query('SELECT * FROM departement where id_region = "'.$id_region.'" ');
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;


}

?>