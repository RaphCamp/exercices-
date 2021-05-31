$(document).ready( function () {
    // On cache les sous-menus :
    $(".description").hide();    
  } ) ;


//cette fonction reset les pokemons à masquer
function masquer () {
    $(".description:visible").slideUp("normal");
    $("li").css('background-color','#f4f7fcf6');
    $("li").css('color','#000000');
    $("span").replaceWith("<span>▶</span>");;
}

  //On click sur le nom de pokémon souhaité
$('.pokemon').on('click', function (){
    //s'il est déja affiché on le cache
    if ($(".description:visible",this).length != 0) {
      masquer();
    }
    //sinon on l'affiche
    else {
        masquer();
        //
        $(".description",this).slideDown("normal");
        $("li",this).css('background-color','#0b75fff6');
        $("li",this).css('color','#ffffff');
        $("span",this).replaceWith("<span>▼</span>");;
    }

});

