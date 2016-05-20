  <?php function recuperer_groupe($id_utilisateur){
	global $mysqli;
	$requete=$mysqli->query("SELECT groupe.* FROM groupe  LEFT JOIN groupeuser  ON groupeuser.id_groupe = groupe.id WHERE groupeuser.id_membre = $id_utilisateur");
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;

}
//--------------------------------------------------//
function rechercheGroupe($recherche){
global $mysqli;
	$requete = $mysqli->query("SELECT * FROM groupe where nom LIKE '%$recherche%'    ");
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;
}
function rechercheUtilisateur($recherche){
global $mysqli;
	$requete = $mysqli->query("SELECT * FROM utilisateurs where nom LIKE '%$recherche%'");
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;
}
function rechercheSport($recherche){
global $mysqli;
	$requete = $mysqli->query("SELECT * FROM sport where nom LIKE '%$recherche%'");
	$output = array();
	while($infos=$requete->fetch_array()){
		$output[] = $infos;
	}
	return $output;
}
function img_groupe($sport){
	global $mysqli;
	$requete = $mysqli->query('SELECT image FROM sport where nom="'.$sport.'"');
	return $requete->fetch_array();
}
?>

