<?php

function recupere_membre($id){
	global $BDD;
	$stmt=$BDD->prepare('SELECT id_membre FROM groupeuser WHERE id_groupe = ?');
	$stmt->execute(array($id));
	$infos=$stmt->fetchAll();
	return $infos;
}
//--------------------------------------------//
function identifier_membre($id){
	global $BDD;
	
	$stmt=$BDD->prepare('SELECT * FROM utilisateurs WHERE id = ?');
	$stmt->execute(array($id));
	$infos=$stmt->fetch();
	return $infos;
}
function supprimer_groupe($id){
	global $BDD;
	
	$stmt=$BDD->prepare('DELETE FROM groupe WHERE id = ?');
	$stmt->execute(array($id));
}
//-----------------------------------------------//
function getStatut($id_groupe,$id_membre){
	global $BDD;
	
	$stmt=$BDD->prepare('SELECT statut FROM groupeuser WHERE id_groupe = ? AND id_membre=?');
	$stmt->execute(array($id_groupe,$id_membre));
	$infos=$stmt->fetch();
	return $infos;

}
function verifier_membre(){
	global $BDD;
	
	$stmt=$BDD->prepare('SELECT id_membre FROM groupeuser WHERE id_groupe = ? AND id_membre=?');
	$stmt->execute(array($_GET['id'],$_SESSION['id']));
	$infos=$stmt->fetchAll();
	return $infos;
}
//------------------------------------------------//
function lister_groupe(){
	global $BDD;
	$stmt=$BDD->prepare("SELECT groupe.* FROM groupe  LEFT JOIN groupeuser  ON groupeuser.id_groupe = groupe.id ORDER BY groupeuser.id DESC");
	$stmt->execute();
	$infos=$stmt->fetchAll();
	return $infos;
}
//------------------------------------------------//
function dernier_groupe(){
	global $BDD;
	$stmt=$BDD->prepare('SELECT * FROM groupe ORDER BY id DESC limit 3 ');
	$stmt->execute();
	return $stmt->fetchAll();
	
		
	}
	
//-------------------------------------------------//
function dernier_groupe_dep($dep){
	global $BDD;
	$stmt=$BDD->prepare('SELECT * FROM groupe WHERE departement=? ORDER BY id DESC limit 3 ');
	$stmt ->execute(array($dep));
	
}
//------------------------------------------------//

function creer_groupe ($nom,$sport,$nombre,$region, $departement, $description){
	global $BDD;
	$stmt=$BDD->prepare('INSERT INTO groupe(nom, sport,nombre_de_membres, id_region, departement, description)VALUES(?,?,?,?,?,?)');
	$stmt ->execute(array($nom,$sport,$nombre,$region,$departement,$description));

	return $BDD->LastInsertId();
}
//---------------------------------------------------------//

function inserer_utilisateur_groupe ($id_utilisateur, $id_groupe,$statut){
	global $BDD;

	$stmt=$BDD->prepare('INSERT INTO groupeuser(id_membre,id_groupe,statut)VALUES(?,?,?)');
	$stmt ->execute(array($id_utilisateur,$id_groupe,$statut));
}
//-----------------------------------------------------------//
function rechercheGroupe($recherche){
global $BDD;
	$stmt=$BDD->prepare("SELECT * FROM groupe where nom LIKE '%$recherche%'");
	$stmt ->execute();
	$infos=$stmt->fetchAll();
	return $infos;
}
//----------------------------------------------------------//
function supprimer_utilisateur_groupe ($id_utilisateur, $id_groupe){
	global $BDD;

	$stmt=$BDD->prepare('DELETE FROM groupeuser WHERE id_membre=? AND id_groupe =?');
	$stmt ->execute(array($id_utilisateur,$id_groupe));
}
//-------------------------------------------------------------//

function generer_groupe($id){
global $BDD;
$stmt=$BDD->prepare('SELECT * FROM groupe WHERE id = ?');
$stmt ->execute(array($id));
$infos=$stmt->fetch();
return $infos;
}
//-------------------------------------------------------------//
function inserer_message_groupe($id_utilisateur,$id_groupe,$content,$date){
	global $BDD;
	$stmt=$BDD->prepare('INSERT INTO groupepost(id_utilisateur,id_groupe,contenu,datepublication)VALUES(?,?,?,?)');
	$stmt ->execute(array($id_utilisateur,$id_groupe,nl2br(htmlspecialchars($content)),$date));

}


 
//-------------------------------------------------------------//
function recupere_sport(){
	global $BDD;
	$stmt=$BDD->prepare('SELECT nom FROM sport ORDER BY nom');
	$stmt ->execute();
	$infos=$stmt->fetchAll();
	return $infos;
}
//-------------------------------------------------------------//
 function recuperer_groupe($id_utilisateur){
	global $BDD;
	$stmt=$BDD->prepare("SELECT groupe.* FROM groupe  LEFT JOIN groupeuser  ON groupeuser.id_groupe = groupe.id WHERE groupeuser.id_membre = ?");
	$stmt ->execute(array($id_utilisateur));
	$infos=$stmt->fetchAll();
	return $infos;

}
function lister_message($id){
global $BDD;
$stmt=$BDD->prepare('SELECT * FROM groupepost WHERE id_groupe = ? ORDER by id DESC');
$stmt ->execute(array($id));
$infos=$stmt->fetchAll();
return $infos;

}
function creer_event($nom, $sport,$date,$club,$descri,$niveau,$nbre,$id_groupe){
	global $BDD;
	$stmt=$BDD->prepare('INSERT INTO evenement(nom,sport,dateevent,club,description, niveau,nbremembre,id_groupe)VALUES(?,?,?,?,?,?,?,?)');
	$stmt ->execute(array(htmlspecialchars($nom),$sport,$date,$club,htmlspecialchars($descri),$niveau,$nbre,$id_groupe));

}
function supprimer_message($id){
	global $BDD;
	
	$stmt=$BDD->prepare('DELETE FROM groupe WHERE id = ?');
	$stmt->execute(array($id));
}

?>
