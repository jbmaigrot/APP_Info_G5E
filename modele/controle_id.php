<?php function controle_id($mail,$motdepasse =''){
	global $mysqli;
	
	$requete=$mysqli->query('SELECT * FROM utilisateurs WHERE email="'.$mail.'" AND motdepasse="'.$motdepasse.'"');
	$infos=$requete->fetch_array();
	return $infos;


}
function connecte(){
	return isset($_SESSION['id']);
}
?>
