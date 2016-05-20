<?php function inscription_id($mail,$pseudo){
	global $mysqli;
	$requete=$mysqli->query('SELECT email, pseudo FROM utilisateurs WHERE email="'.$mail.'" OR pseudo="'.$pseudo.'"');
	$infos=$requete->fetch_array();
	return $infos;


}
?>
