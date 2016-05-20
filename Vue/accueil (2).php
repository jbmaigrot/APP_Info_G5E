<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Socia</title>
        <link rel="stylesheet" href="../vue/main.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    </head>
    
    <body>
        
        
        <video autoplay loop poster="../vue/video.png" id="bgvid">
            <source src="../vue/video.mp4" type="video/mp4">
        </video>
        
        <span id="s1"></span>
        <span id="s2"></span>
        <span id="s3"></span>
        
        
        <div id="wrap">
            
            <ul id="nav">
                <li id="logo"><a href="#"> <img src="../vue/logoblanc.png" alt="accueil"></a></li>
                <li><a href="#s1">Accueil</a></li>
                <li><a href="#s2">Groupes</a></li>
                <li><a href="#s3">Philosophie</a></li>
                <li><a href="#login-box" class="login-window">Connexion</a></li>
                <li><a href="#signin-box" class="signin-window">Inscription</a></li>
                <li id="social"><a href="#"> <img src="../vue/facebook.png" alt="accueil"></a></li>
                <li id="social"><a href="#"> <img src="../vue/twitter.png" alt="accueil"></a></li>
            </ul>
            
               <div class="contenu">
                    <div id="slide1">
                        <div class="slide_inside">
                            <h1><a>La passion du sport</a></h1>
                        </div>	 	
                    </div>
                    
        
                    <div id="slide2">
                        <div class="slide_inside">
                            <h2>Les derniers groupes</h2>
                                <div class="slide2left"><p></p></div>
                                <div class="slide2middle"><p></p></div>
                                <div class="slide2right"><p/p></div>
                        </div>     	
                    </div>
                    
        
                    <div id="slide3">
                        <div class="slide_inside">			
                            <h2>Credits</h2>		
                        </div>    
                    </div>
            </div> 
        </div>
            

        <div id="login-box" class="login-popup">
            <p class="titleco"><s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s>&nbsp;&nbsp;Connexion&nbsp;&nbsp;<s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s></p>
            <form method="post" class="signin" action="#">
                <fieldset class="textbox">
                    <label class="username">
                        <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Adresse e-mail">
                    </label>
                    <label class="password">
                        <input id="password" name="password" value="" type="password" placeholder="Mot de passe">
                    </label>
                    <button class="submit button" type="button">Connexion</button>
                    <p>
                        <a class="forgot" href="#">Mot de passe oublié ?</a>
                    </p>        
                </fieldset>
            </form>
        </div>
        
     <!--   
        <div id="signin-box" class="signin-popup">
            <p class="titleco"><s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s>&nbsp;&nbsp;Inscription&nbsp;&nbsp;<s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</s></p>
            <form method="post" class="signin" action="#">
                <fieldset class="textbox">
                    <label class="pseudo">
                        <input id="pseudo" name="username" value="" type="text" autocomplete="on" placeholder="Pseudo">
                    </label>
                    <label class="username">
                        <input id="email" name="email" value="" type="text" autocomplete="on" placeholder="Adresse e-mail">
                    </label>
                    <label class="password">
                        <input id="password" name="password" value="" type="password" placeholder="Mot de passe">
                    </label>
                     <label class="password">
                        <input id="passwordconfirm" name="passwordconfirm" value="" type="password" placeholder="Confirmez mot de passe">
                    </label>
                    <button class="submit button" type="button">Inscription</button>
                    <p>
                        <a class="forgot" href="#">Déjà inscrit ?</a>
                    </p>        
                </fieldset>
            </form>
        </div>
        -->
        
           

        
        
         
        
<!--

        <script>   
            $(document).ready(function() {
                $('a.signin-window').click(function() {
                    
                     //aucliquesurlelien 
                    var signin = $(this).attr('href');
                    
                    //afficher la popup
                    $(signin).fadeIn(300);
                    
                    //padding
                    var popMargTop = ($(signin).height() + 24) / 2; 
                    var popMargLeft = ($(signin).width() + 24) / 2; 
                    
                    $(signin).css({ 
                        'margin-top' : -popMargTop,
                        'margin-left' : -popMargLeft
                    });
                    
                    // ajouter le masque
                    $('body').append('<div id="mask"></div>');
                    
                    $('#mask').fadeIn(300);
                    
                    $('a.close, #mask').on('click', function() {
                        $('#mask , .signin-popup').fadeOut(300, function() {
                            $('#mask').remove();  
                        }); 
                        return false;
                    });
                    
                    return false;
                });
                
                // fermer la fenetre
                
            });
            
        </script>  -->
        
<!--    
        
    <script>
$(document).ready(function() {
$(".chercher").click(function(){
var req=$(this).attr("name");
                    $.ajax({
                        type: "GET",
                        url: "recherche.php?type_demande="+req,
                        error:function(msg, string){
                            alert( "Erreur");
                        },
                        success:function(data){
                            $(".contenu").empty().hide();
                            $(".contenu").append(data);
                            $(".contenu").fadeIn(900);
                        }
                    });
                });
                
            })
        </script> -->
        
    </body>
</html>