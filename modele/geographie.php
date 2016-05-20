<?php 
function recupere_region(){
	global $BDD;
	$stmt=$BDD->prepare('SELECT * FROM region');
	$stmt->execute();
	$infos=$stmt->fetchAll();
	return $infos;


}
function listedepartement(){
	global $BDD;
	$stmt=$BDD->prepare('SELECT * FROM departement');
	$stmt->execute();
	$infos=$stmt->fetchAll();
	return $infos;

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