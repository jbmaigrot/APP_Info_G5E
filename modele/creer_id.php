<?php
function creer_id($pseudo,$mail, $departement, $motdepasse,$sexe){
	global $mysqli;
	$mysqli->query('INSERT INTO utilisateurs set pseudo ="'.$pseudo.'", email ="'.$mail.'", departement="'.$departement.'", motdepasse="'.$motdepasse.'", sexe = "'.$sexe.'"');


}
?>