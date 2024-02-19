jQuery(document).ready(function(){
        /* notre code ici*/ 
    console.log('Jquery est bien chargé et la page prête!');
    $('#chargement').hide();
    $('#contenu').show();
    }
        );


  //ici j'abonne les div et j'applique des propriétés css      
$("#chargement").css("display", "none");
$("#contenu").css("display", "block");
 
//ajout des events aux buttons
//function pour zoomer
jQuery('#zoom').click(function(){
    console.log('click sur zoom');
    $('img').each(function()
    {
        console.log('une image trouvee! a zoommer');
        $(this).css('height','100vh');
    })
});

//function pour dezoomer

jQuery('#dezoom').click(function(){
    console.log('click sur dezoom');
    $('img').each(function()
    {
        console.log('une image trouvee!a dezoommer');
        $(this).css('height','25vh');
    })
});



$(document).keyup(function(event){
    if (event.key === 'touche') {
       const appui = touche.which || touche.keyCode; 
       console.log(appui);
    }
});
   