<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Socia</title>
        <link rel="stylesheet" href="vue/main.css"/>
        <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
         <script type="text/javascript" src="js/popup.js"></script>
    </head>
    
    <body>
        
        
        <video autoplay loop poster="vue/video.png" id="bgvid">
            <source src="vue/video.mp4" type="video/mp4">
        </video>
        
        <span id="s1"></span>
        <span id="s2"></span>
        <span id="s3"></span>
        
        
        <div id="wrap">
            
            <ul id="nav">
    
                <li id="logo"><a href="#"> <img src="vue/logoblanc.png" alt="accueil"></a></li>
                <li><a href="#s1">Accueil</a></li>
                <li><a href="#s2">Groupes</a></li>
                <li><a href="#s3">Philosophie</a></li>
                <li><a href="#login-box" class="login-window">Connexion</a></li>
                <li><a href="#signin-box" class="signin-window">Inscription</a></li>
                <li id="social"><a href="#"> <img src="vue/facebook.png" alt="accueil"></a></li>
                <li id="social"><a href="#"> <img src="vue/twitter.png" alt="accueil"></a></li>
            </ul>
            
               <div class="contenu">
                    <div id="slide1">
                        <div class="slide_inside">
                            <h1><a>La passion du sport</a></h1>
                        </div>	 	
                    </div>
                    
        
                    <div id="slide2">
                        <div class="slide_inside">
                            <h2 style="text-align:center">Les derniers groupes:</h2>
                            <HR width=100%>
                                <div class="slide2left"><?php 
                                foreach ($groupe as $le_groupe){
                                 echo "
                         <div class='cadregroupe'>
        
                <h3 style='margin:0;'>".$le_groupe['nom']."</h3><br/>
                Groupe de pratique de : <i><strong>".$le_groupe['sport']."</strong></i><br/>
                Dans le departement: <i><strong>".$le_groupe['departement']."</strong></i>
            
        </div><br/>
        <HR width=100%>";


    }
 ?></div>
                                <div class="slide2middle"></div>
                                <div class="slide2right"></div>
                        </div>     	
                    </div>

                    
        
                    <div id="slide3">
                        <div class="slide_inside">			
                            <h2 style="text-align:center">Notre philosophie:</h2>
                            <HR width=100%>
                           <p> Nous sommes Web’Design une association à but non lucratif, notre objectif avec Socia est de proposer un site web permettant
                            à ses utilisateurs de partager leur passion commune pour un sport. Pour cela vous pourrez former des groupes, y inviter vos amis, 
                            programmer des évènements, consulter le profil des différents membres et pourquoi pas faire de nouvelles rencontres avec des personnes qui partagent la même passion que vous. 
Plus de 100 sports proposés ! Que vous soyez débutant ou expert, vous trouverez un partenaire à votre niveau !	</p>	
                       <HR width=100%> </div>    
                    </div>
            </div> 
        </div>
            

       <div id="login-box" class="login-popup">
            <p class="titleco"><s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s>&nbsp;&nbsp;Connexion&nbsp;&nbsp;<s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s></p>
            <form method="post" class="signin" action="#">
                <fieldset class="textbox">
                    <?php if(!empty($erreur_connexion)) { ?>
                        <div class="erreur_connexion"><?php echo $erreur_connexion; ?></div>
                    <?php } ?>
                    <br />
                    <label class="username">
                        <input id="username" name="mail" value="" type="text" autocomplete="on" placeholder="Adresse e-mail">
                    </label>
                    <label class="password">
                        <input id="password" name="pwd" value="" type="password" placeholder="Mot de passe">
                    </label>
                    <input class="submit_button" type="submit" value="Connexion">
                    <p>
                        <a class="forgot" href="#">Mot de passe oublié ?</a>
                    </p>        
                </fieldset>
            </form>
        </div>
        
        
       <input class="submit_button" type="submit" value="Connexion">
       <div id="signin-box" class="login-popup">
            <p class="titleco"><s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s>&nbsp;&nbsp;Inscription&nbsp;&nbsp;<s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s></p>
            <form method="post" class="signin" action="#">
                <fieldset class="textbox">
                    <?php if(!empty($erreur_inscription)) { ?>
                        <div class="erreur_inscription"><?php echo $erreur_inscription; ?></div>
                    <?php } ?>
                    <label class="pseudo">

                        <input id="pseudo" name="pseudo" value="" type="text" autocomplete="on" placeholder="Pseudo">
                    </label>
                    <label class="username">
                        <input id="username" name="email" value="" type="text" autocomplete="on" placeholder="Adresse e-mail">
                    </label>
                    <label class="departement">
                        <Select name="departement">
                        <option selected disabled>----Departement-----</option>
                     <?php foreach ($departement as $key => $value) {
                        echo'<option value="'.$value['departement'].'">'.utf8_encode($value['departement']).'</option>';
                     } ?>
                    </select>
                    </label>
                    <label class="password">
                        <input id="password" name="mot_de_passe" value="" type="password" placeholder="Mot de passe">
                    </label>
                    <label class="confirmpassword">
                        <input id="confirmpassword" name="confirmation_mot_de_passe" value="" type="password" placeholder="Confirmer le mot de passe">
                    </label>
                    <select name="sexe">
                    <option disabled selected>--Sexe--</option>
                     <option value="Homme">Homme</option>
                     <option value="Femme">Femme</option>
                     <option value="Autre">Autre</option>
                    </select>
                     <input class="submit_button" type="submit" value="inscription">
                    <p>
                        <a href="#login-box" class="forgot">Déjà inscrit ?</a>
                    </p>
                </fieldset>
            </form>
        </div>

    
   
           

        
        
         
        
        

        
    </body>
</html>