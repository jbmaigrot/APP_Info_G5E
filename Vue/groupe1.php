<div>
   <?php
   $d=count(recupere_membre());?>
   <div class="entete"><?php
   $img = img_groupe($test['sport']);
   echo $img['image'];?> 
   <h1><?php echo $test['nom'];?></h1><div style="clear:both"></div></div>
   <HR width=100%><br/>
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

	}?>
   	<p> Groupe de pratique de : <?php echo $test['sport'] ?> <br/>
   		Nombre de membre : <?php echo $d."/".$test['nombre_de_membres'];?></p>
   		<input type="submit" id="lienAfficherListeMembre" onclick="afficherListe()" value="Afficher liste des membres">
   		<input type="submit" id="lienMasquerListeMembre" onclick="masquerListe()" style="display:none;"value="Masquer liste des membres">
   		<button>Creer evenement</button>
   		<input type="submit" id="lienAfficherListeEvenement"  onclick="afficherListe()" value="Afficher liste des evenements">	
		<input type="submit" id="lienMasquerListeEvenement" style="display:none;"  onclick="masquerListe()"value="Masquer liste des evenements">
		
		<div id="bloc1" style="display:none;">
		<?php 
		$idmembre = recupere_membre();
		$i=0;
		foreach ($idmembre as $output)
		{
			$membre = identifier_membre($output['id_membre']);
			foreach ($membre as $output)
			{
				echo $output['nom'].' '.$output['prenom'].'<br/>';
				$i+=1;
			}

		}		
 ?>
		</div>
			
		<div id="bloc2" style="width:200px;height:200px;border:5px solid black;display:none;"></div>
   	<p><br/><?php echo utf8_encode($test['description']) ;?></p>
		<HR width=100%><br/>
			<textarea name="description" rows="4" cols="80" placeholder="votre publication ici"></TEXTAREA><button>Poster</button>
		
		
		<br>
</div>

		
	
	
   