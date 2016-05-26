
    		<form method="post" action="">



    	<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
         <script type="text/javascript" src="js/photoUpload.js"></script>
<form method="post" enctype="multipart/form-data">
	<fieldset>
		<img id="blah" src="images/png/<?php echo $photo?>.png" alt="your image" /><br/>
		<input type="file" size="50" id="imgInp" name ="photoprofile"><br/>
	    			<?php echo $creer_groupe[1]; ?>
	    			<input type ="text" name="nom_du_groupe" value="<?php echo $groupe['nom'];?>"><br/>
	    		
	    			<?php echo $creer_groupe[2]; ?>
	    			<Select name="sport" class="sport">
	    				<option selected ><?php echo $groupe['sport'];?></option>
	    			 <?php foreach ($sport as $key => $value) {
	    			 	echo'<option>'.$value['nom'].'</option>';
	    			 } ?>
	    			</select><br/>
	    		
	    		<?php echo $creer_groupe[3]; ?>
		    		<input type="number" name="nombre_de_membres" min="1" value="<?php echo $groupe['nombre_de_membres'];?>"><br/>
	   
	    		
	    			
	    		<?php echo $creer_groupe[6];?>
	   			<textarea name="description_groupe" rows =4  cols=40><?php echo $groupe['description'];?></textarea><br/>
	    		
	    			<input type="submit" value="edit" name="edit">
	    		
	    	</fieldset>
	    	</form>
	</div>