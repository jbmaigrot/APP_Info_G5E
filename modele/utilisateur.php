<?php 
function controle_id($mail,$motdepasse =''){
	global $BDD;
	$stmt=$BDD->prepare('SELECT * FROM utilisateurs WHERE email= :email');
	//$m=password_hash($motdepasse,PASSWORD_BCRYPT);
	//echo $m;
	$stmt->execute(array('email'=>$mail));
	$infos=$stmt->fetch();
	return $infos;
}
//---------------------------------------------//
function connecte(){
	return isset($_SESSION['id']);
}
//----------------------------------------------//
function creer_id($pseudo,$mail, $departement, $motdepasse,$sexe){
	global $BDD;
	$stmt=$BDD->prepare('INSERT INTO utilisateurs(pseudo, email, departement, motdepasse, sexe) VALUE(:pseudo,:email,:departement, :motdepasse,:sexe)');
	$stmt->execute(array("pseudo"=>$pseudo, "email"=>$mail, "departement"=>$departement, "motdepasse"=>password_hash($motdepasse,PASSWORD_BCRYPT), "sexe"=>$sexe));

}
//--------------------------------------------//
function inscription_id($mail,$pseudo){
	global $BDD;
	$stmt=$BDD->prepare('SELECT email, pseudo FROM utilisateurs WHERE email=? OR pseudo=?');
	$stmt->execute(array($mail, $pseudo));
	$infos=$stmt->fetchAll();
	return $infos;


}
//-----------------------------------------------//
function rechercheUtilisateur($recherche){
global $BDD;
	$stmt=$BDD->prepare("SELECT * FROM utilisateurs where nom LIKE '%$recherche%'");
	$stmt->execute();
	$infos=$stmt->fetchAll();
	return $infos;
}
?>