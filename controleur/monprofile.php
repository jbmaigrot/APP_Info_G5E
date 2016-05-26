<?php	$sport=recupere_sport();
		$infos=identifier_membre($_SESSION['id']);
		if ($infos['photoprofile']==null){
			$photo="basique";
		}
		else{
			$photo=$infos['photoprofile'];
		}
		if ($infos['nom']==null){
			$nom="Non renseigné";
		}
		else{
			$nom=$infos['nom'];
		}
		if ($infos['age']==null){
			$age="Non renseigné";
		}
		else{
			$age=$infos['age']." ans";
		}
		if ($infos['email']==null){
			$email="Non renseigné";
		}
		else{
			$email=$infos['email'];
		}
		if ($infos['prenom']==null){
			$prenom="Non renseigné";
		}
		else{
			$prenom=$infos['prenom'];
		}
 include"vue/profil.php"; ?>