<?php 
	if($_GET['type_demande'] == "connexion") 
	{
    	include("connexion.php");
	}
	elseif($_GET['type_demande'] == "inscription") 
	{
    	include("inscription.php");
	}
	elseif(in_array($_GET['type_demande'], $table)) 
	{
?>