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
	global $BDD;
	$stmt=$BDD->prepare('SELECT * FROM departement where id_region = ?');
	$stmt ->execute(array($id_region));
	$infos=$stmt->fetchAll();
	return $infos;

}




?>