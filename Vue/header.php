
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>socia</title>
		<link rel="stylesheet" type="text/css" href="vue/style.css">
		<script type="text/javascript" src="js/listage.js"></script>
	 </head>
	 <body>
	 	<header>
	    	<nav>
			    <form method='get' action=''>
			    	<a href="?page=accueil"><img src="images/logo.png" id="logo"></a>
                	<?php if(connecte()){ ?>
						<a href="?page=creer_groupe"><?php echo $variable_header[1];?></a>
				    	<a href="#"><?php echo $variable_header[2];?></a>
				    	<a href="#"><?php echo $variable_header[3];?></a>
				    	<a href="?page=profil"><?php echo $variable_header[4];?></a>
				    	<div class="flag">
					    	<a href="?lang=en"><img src="images/drapeauAnglais.png" style="width:30px"></a>
					    	<a href="?lang=fr"><img src="images/drapeauFrancais.png" style="width:30px"></a>
				    	</div>
				    	<a href='?page=deconnexion'><?php echo $variable_header[5];?></a>
					<?php }
					else{ ?>
					    <a href="#">Groupes</a>
					    <a href="#">Nous découvrir</a>
					    <a href='?page=connexion'>Connexion</a>
					 <?php } ?>
	    	        <div class="recherche">
	    	        	<input type="texte" name="requete" placeholder="recherche">
						<select name="filtre">
                     		<option selected value="nofilter">---Filtre---</option>
                            <option value="Groupe">Groupe</option>
                            <option value="Sport">Sport</option>
                            <option value="Utilisateur">utilisateur</option>
                        </select>
                     	<input type="submit" value="valider">
                    </div>
			    </form>
			</nav>
		</header>
	<div id="page">
	
		 