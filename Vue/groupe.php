<div>
  
   <div class="entete"><?php
   $img = img_groupe($test['sport']);
   echo $img['image'];?> 
   <h1><?php echo $test['nom'];?></h1><div style="clear:both"></div></div>
   <HR width=100%></HR><br/>
   	<?php
 		if(empty($test2)AND($d<$test['nombre_de_membres'])){
		?><form method='post'>
		<input type='submit' value ='Rejoindre le groupe' name='rejoindre'>
		</form>
		<?php
		}
		elseif (!empty($test2)){
		?>
		<form method='post'>
		<input type='submit' value ='Quitter le groupe' name='quitter'>
	</form>
		
<?php
	}
	else{

	}
		echo($statut['statut']);
		if ($statut['statut']=="admin"){ ?>
				<form method='post'>
		<input type='submit' value ='edit' name='edit'>

	</form>
	<?php
		}
	?>
   	   <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
   	  <script type="text/javascript" src="js/popup.js"></script>
   	<p> Groupe de pratique de : <?php echo $test['sport'] ?> <br/>
   		Nombre de membre : <?php echo $d."/".$test['nombre_de_membres'];?></p>
   		<input type="submit" id="lienAfficherListeMembre" onclick="afficherListe()" value="Afficher liste des membres">
   		<input type="submit" id="lienMasquerListeMembre" onclick="masquerListe()" style="display:none;"value="Masquer liste des membres">
   		<a href="#login-box" class="login-window">Connexion</a>


   		  <div id="login-box" class="login-popup">
            <p class="titleco"><s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s>&nbsp;&nbsp;Nouvel Evenement&nbsp;&nbsp;<s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s></p>
            <form method="post" class="signin" action="#">
                <fieldset class="textbox">
                    <label class="nom">

                        <input id="nom" name="nom" value="" type="text" autocomplete="on" placeholder="Nom de l'évènement"><br/>
                    </label>
             
	    			<Select name="sport" class="sport">
	    				<option selected disabled>-----Sport-----</option>
	    			 <?php foreach ($sport as $key => $value) {
	    			 	echo'<option>'.$value['nom'].'</option>';
	    			 } ?>
	    			</Select><br/>
	    			<select name="Annee">
	    				<option selected disabled>Année</option>
	    				<?php $A=date('Y');
	    				for($i=0;$i<=5;$i++){
	    					echo'<option value='.($A+$i).'>'.($A+$i).'</option>';
	    				}
	    				?>
	    					</select>
	    					<select name="mois">
	    						<option selected disabled>Mois</option>
	    				<?php

	    				for($i=1;($i)<=12;$i++){
	    					echo'<option value='.$i.'>'.($i).'</option>';
	    				}
	    				?>
	    					</select>
	    			<select name="Jour">
	    				<option selected disabled>Jour</option>
	    				<?php
	    				for($i=1;($i)<=31;$i++){
	    					echo'<option value='.$i.'>'.($i).'</option>';
	    				}
	    				?>


	    					</select><br/>
	    					<select name="heure">
	    				<option selected disabled>Heure</option>
	    				<?php
	    				for($i=01;($i)<=24;$i++){
	    					echo'<option value='.$i.'>'.($i).'</option>';
	    				}
	    				?>


	    					</select>
	    					<select name="minute">
	    				<option selected disabled>minutes</option>
	    				<?php
	    				for($i=00;($i)<=60;$i++){
	    					echo'<option value='.$i.'>'.($i).'</option>';
	    				}
	    				?>


	    					</select>
	  
	    			<input type="text" name ="adresse"><br/>
	    			<TEXTAREA style="width:100%;height:50px" name="description"></TEXTAREA>
	    			<select name="niveau">

	    				<option>Debutant</option>
	    	<option>intermédiaire</option>
	    	<option>Confirmé</option>
	    	<option>Pros</option>
	    			</select>
	    			<input type="number" name="nombre">
	    			<input type="submit" value="valider">
	    			
                </fieldset>
            </form>


        </div>

        

   		<input type="submit" id="lienAfficherListeEvenement"  onclick="afficherListe()" value="Afficher liste des evenements">	
		<input type="submit" id="lienMasquerListeEvenement" style="display:none;"  onclick="masquerListe()"value="Masquer liste des evenements">
		
		<div id="bloc1" style="display:none;">
		<?php 
		$idmembre = recupere_membre($_GET['id']);
		
		$i=0;
		foreach ($idmembre as $infos)
		{
			$membre = identifier_membre($infos['id_membre']);

				echo $membre['nom'].' '.$membre['prenom'].'<br/>';
				$i+=1;

		}		
 ?>
		</div>
		<form method="post">	
		<div id="bloc2" style="width:200px;height:200px;border:5px solid black;display:none;"></div>
   	<p><br/><?php echo $test['description']		 ;?></p>
		<HR width=100% /></HR><br/>
			<?php if ($statut['statut']=="admin" OR $statut['statut']=="invite"){ ?>
			<textarea name="message" style="width:100%" placeholder="votre publication ici"></textarea>
				<input type="submit" value="poster" name="poster"><?php }?>
		
		
		</form>
		<br>
		<?php
			 foreach ($message as $output)
			{
				$user=identifier_membre($output['id_utilisateur']);
				$tmp=$output['datepublication'];
				$date=date_create($tmp);
				$DS=date_format($date, 'd-m-Y H:i:s');
				
				echo "Posté le ".$DS." par ".$user['pseudo'];if ($statut['statut']=="admin"){
					echo '<form method="post"><input type="hidden" name="id_commentaire" value="'.$output['id'].'">';
				 	echo"<input type='submit' value='supprimer' name='poster'><br/>";	
				 	var_dump($output['id']);	
				 	echo "</form>";																
				 }
				 else{
				 	echo "<br/>";
				 }
					echo $output['contenu']."<br/>";
				
				
			}
			?>
</div>
		

		
	
	
   