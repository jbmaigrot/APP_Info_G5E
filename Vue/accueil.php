<?php if( !empty($mes_groupes)){?>

	<?php
        echo"
        <div class=grouplist>
            <h1>Mes Groupes</h1>";
    		foreach ($mes_groupes as $le_groupe) {
            echo "
                <div class='cadregroupe'>
                    <div class='imagegroupelogo'>"; 
                        if(!empty(img_groupe($le_groupe['sport']))){
                            $img = img_groupe($le_groupe['sport']);
                            echo $img['image'];}
                        
            echo "
                    </div>
                    <p><a href=?page=groupe&id=".$le_groupe['id'].">".$le_groupe['nom']."</a></p>
                </div>";
            }
        echo"
        </div>
        <div class='cadreevenement'>
            Mes événements à venir :
        </div>
        ";

    }
else{
    echo "<div class='cadregroupe'><h1 style='text-align:center;font-size:20px;'>Bienvenue à toi ".$_SESSION['pseudo']."</h1><br/> Nous sommes heureux de t’accueillir au sein de la communauté Socia ! 
     Tu peux dès à présent créer un groupe planifier des évènements et y inviter tes amis, n’hésite pas à 
        inciter tes amis non-inscrits à rejoindre la plateforme . Tu peux aussi rejoindre des groupes déjà crées, et faire connaissance
     avec des membres qui habitent près de chez toi et partagent la même passion que toi !</div><HR width=100%>";

    echo"<h1 style='text-align:center;font-size:20px;'> Les groupes dans ton departement:</h1>";
     if( !empty($liste_groupe_dep)){
            foreach ($liste_groupe_dep as $le_groupe) {

        echo "
        <div class='cadregroupe'>
        
                <p><a href=?page=groupe&id=".$le_groupe['id'].">".$le_groupe['nom']."</a></p>

            <table>
            <tr>
                <td><div class='imagegroupelogo'>"; 
                    if(!empty(img_groupe($le_groupe['sport']))){
                        $img = img_groupe($le_groupe['sport']);
                        echo $img['image'];
                    }
                echo "
                </div></td>
            </tr>
            <tr>
                <td>".$le_groupe['sport']."</td>
            </tr>
            <tr>
                <td>".utf8_encode(nl2br($le_groupe['description']))."</td>
            </tr>
        </table></div><br/>";}
    }
}
    
    
    if(isset($recherche)){
        echo "<h2>".$src1."</h2></br>
        <p>".$nbre_resultats.$src2 ;

   foreach ($recherche as $groupe) {

        echo "
        <div class='cadregroupe'>
        <table>
        	<tr>
        		<td><a href=?page=groupe&id=".$groupe['id'].">".utf8_encode($groupe['nom'])."</td>
        	</tr>
        	
        </table>
        </div>";
        
        
    }

    }; 
?>
</div>


	
