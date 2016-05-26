
		<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="js/scipt.js"></script>

		<link rel="stylesheet" href="#">
	 </head>
    <body>
    	<div class="creergroupe">
    	<table>
    		
    		<form method="post" action="">
    			<pre >
	    		<tr>
	    			<td><?php echo $creer_groupe[1]; ?></td>
	    			<td><input type ="text" name="nom_du_groupe"></td>
	    		</tr>
	    		<tr>
	    			<td><?php echo $creer_groupe[2]; ?></td>
	    			<td><Select name="sport" class="sport">
	    				<option selected disabled>-----Sport-----</option>
	    			 <?php foreach ($sport as $key => $value) {
	    			 	echo'<option>'.utf8_encode($value['nom']).'</option>';
	    			 } ?>
	    			</select></td>
	    		</tr>
	    		<tr>
	    			<td><?php echo $creer_groupe[3]; ?></td>
		    		<td><input type="number" name="nombre_de_membres" min="1"><</td>
	    		</tr>
	    		<tr class="tableau">
	    			<td><?php echo $creer_groupe[4]; ?></td>
	    			<td><Select name="region" class="region">
	    				<option selected disabled>----Region-----</option>
	    			 <?php foreach ($region as $key => $value) {
	    			 	echo'<option value="'.$value['id_region'].'">'.utf8_encode($value['region']).'</option>';
	    			 } ?>
	    			</select>
	    			<select class="departements" name="departement" style="display:none;"></select>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td><?php echo $creer_groupe[6];?></td>
	    			<td><textarea name="description_groupe" rows =4  cols=40></textarea></td>
	    		</tr>
	    		<tr>
	    			<td><input type="submit" value="<?php echo $creer_groupe[7]; ?>" name="creer_le_groupe"></td>
	    		</tr>
	    	</pre>
	    	</form>
	
	    </table>
	</div>