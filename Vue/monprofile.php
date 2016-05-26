        <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
         <script type="text/javascript" src="js/photoUpload.js"></script>
<form method="post" enctype="multipart/form-data">
	<fieldset>
		<img id="blah" src="images/png/<?php echo $photo?>.png" alt="your image" /><br/>
	<input type="file" size="250" id="imgInp" name ="photoprofile"><br/>
	<input type="text" name ="nom" placeholder="Nom"><br/>
	<input type="text" name ="prenom" placeholder="Nom"><br/>
	<input type="text" name ="email" placeholder="Nom"><br/>
	<input type="text" name ="pseudo" value=<?php echo $infos['pseudo']?>><br/>
	
	<?php 
	for($i=1;$i<=3;$i++){
		?>
	<select onchange="niveau('sport<?php echo $i ?>')">
	 <?php foreach ($sport as $key => $value) {
	    			 	echo'<option>'.$value['nom'].'</option>';
	    			 } ?></select>
	    <div id="sport<?php echo $i ?>" style="display:none"><select  >
	    	<option>Debutant</option>
	    	<option>intermédiaire</option>
	    	<option>Confirmé</option>
	    	<option>Pros</option>
	    	</select>
	    </div><br/>
	    <?php }?>

	<textarea name="description_groupe" rows =4  cols=40></textarea>
	<input type="submit" name ="prenom" value="valider">
</fieldset>
</form>