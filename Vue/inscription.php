<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>Socia</title>
		<link rel="stylesheet" href="#">
	 </head>
    <body>
    	<img src="../images/logo.png" style='width:250px'>
    	<table>
    		<form method="post" action="">
	    		<tr>
	    			<td>Pseudo</td>
	    			<td><input type ="text" name="pseudo"></td>
	    			<td><?php if(!empty($erreur_champs)){echo '<span class="erreur_inscription">*</span>';} ?></td>
	    			<td><?php if(isset($erreur_pseudo)){echo '<span class="erreur_inscription">'.$erreur_pseudo.'</span>';} ?></td>
	    		</tr>
	    		<tr>
	    			<td>E-mail</td>
	    			<td><input type ="email" name="email"></td>
	    			<td><?php if(!empty($erreur_champs)){echo '<span class="erreur_inscription">*</span>';} ?></td>
	    			<td><?php if(isset($erreur_email)){echo '<span class="erreur_inscription">'.$erreur_email.'</span>';} ?></td>
	    		</tr>
	    		<tr>
	    			<td>Ville</td>
	    			<td><input type ="text" name="ville"></td>
	    			<td><?php if(!empty($erreur_champs)){echo '<span class="erreur_inscription">*</span>';} ?></td>
	    		</tr>
	    		<tr>
	    			<td>Mot de passe</td>
	    			<td><input type ="password" name="mot_de_passe"></td>
	    			<td><?php if(!empty($erreur_champs)){echo '<span class="erreur_inscription">*</span>';} ?></td>
	    		</tr>
	    		<tr>
	    			<td>Confirmer mot de passe</td>
	    			<td><input type ="password" name="confirmation_mot_de_passe"></td>
	    			<td><?php if(!empty($erreur_champs)){echo '<span class="erreur_inscription">*</span>';} ?></td>
	    			<td><?php if(isset($erreur_mot_de_passe)){echo '<span class="erreur_inscription">'.$erreur_mot_de_passe.'</span>';} ?></td>
	    		</tr>
	    		<tr>
	    			<td>Age</td>
	    			<td><input type ="number" name="age"></td>
	    			<td><?php if(!empty($erreur_champs)){echo '<span class="erreur_inscription">*</span>';} ?></td>
	    		</tr>
	    		<tr>
	    			<td>Sexe</td>
	    			<td><Select name="sexe">
	    			 <option>Homme</option>
	    			 <option>Femme</option>
	    			 <option>Autre</option>
	    			</select></td>
	    			<td><?php if(!empty($erreur_champs)){echo '<span class="erreur_inscription">*</span>';} ?></td>

	    		</tr>
	    		<tr>
	    			<td colspan="2" style="text-align:right;"><input type ="submit" value="Valider" name="valider"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="4"><?php if(!empty($erreur_champs)){echo'<span class="erreur_inscription">'.$erreur_champs.'</span>';} ?></td>
	    		</tr>


	    	</form>	
	    </table>
    	
		
	</body>
</html>