function afficherListe()
{
	document.getElementById('lienAfficherListeMembre').style.display = "none";
	document.getElementById('lienMasquerListeMembre').style.display = "inline-block";
	document.getElementById('bloc1').style.display = "inline-block";	
}

function masquerListe()
{
	document.getElementById('lienAfficherListeMembre').style.display = "inline-block";
	document.getElementById('lienMasquerListeMembre').style.display = "none";
	document.getElementById('bloc1').style.display = "none";	
}