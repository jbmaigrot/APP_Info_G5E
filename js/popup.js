 
            $(document).ready(function() {

                $('a.login-window').click(function() {
                    
                    //aucliquesurlelien 
                    var loginBox = $(this).attr('href');
                    
                    //afficher la popup
                    $(loginBox).fadeIn(300);
                    
                    //padding
                    var popMargTop = ($(loginBox).height() + 24) / 2; 
                    var popMargLeft = ($(loginBox).width() + 24) / 2; 
                    
                    $(loginBox).css({ 
                        'margin-top' : -popMargTop,
                        'margin-left' : -popMargLeft
                    });
                    
                    // ajouter le masque
                    $('body').append('<div id="mask"></div>');
                    
                    $('#mask').fadeIn(300);
                    
                    $('a.close, #mask').on('click', function() {
                        $('#mask , .login-popup').fadeOut(300, function() {
                            $('#mask').remove();

                        }); 
                        return false;
                    });
                    
                    return false;
                });
                $('a.signin-window').click(function() {
                    
                     //aucliquesurlelien 
                    var signinbox = $(this).attr('href');
                    
                    //afficher la popup
                    $(signinbox).fadeIn(300);
                    
                    //padding
                    var popMargTop = ($(signinbox).height() + 24) / 2; 
                    var popMargLeft = ($(signinbox).width() + 24) / 2; 
                    
                    $(signinbox).css({ 
                        'margin-top' : -popMargTop,
                        'margin-left' : -popMargLeft
                    });
                    
                    // ajouter le masque
                    $('body').append('<div id="mask"></div>');
                    
                    $('#mask').fadeIn(300);
                    
                    $('a.close, #mask').on('click', function() {
                        $('#mask , .login-popup').fadeOut(300, function() {
                            $('#mask').remove();  
                        }); 
                        return false;
                    });
                    
                    return false;
                });
            
               
                
            });

