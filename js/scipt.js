$(document).ready(function() {
   // var $regions = $('#regions');
     
 
    // à la sélection d une région dans la liste
    $('.region').on('change', function() {
        var val = $(this).val(); // on récupère la valeur de la région
        console.log(val);
        if(val != '') {
             
            $.ajax({
                url: '?page=creer_groupe&id_region=' + val,
                success: function(html) {
                   $('.departements').html(html).show();
                }
            });
        }
    });
});