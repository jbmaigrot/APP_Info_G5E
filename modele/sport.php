<?php
function rechercheSport($recherche){
	global $BDD;
	$stmt=$BDD->prepare('SELECT*FROM sport where nom LIKE"%$recherche%"');
	$stmt ->execute();
	$infos=$stmt->fetchAll();
	return $infos;
}
function img_groupe($sport){
	global $BDD;
	$stmt=$BDD->prepare('SELECT image FROM sport where nom=?');
	$stmt ->execute(array($sport));
	$infos=$stmt->fetch();
	return $infos;

}