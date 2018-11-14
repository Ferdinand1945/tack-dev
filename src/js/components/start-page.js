'use strict';

$('#llamaMozo').on('click', function() {
    $(".shopping_cart_holder").fadeIn();
    $("#shopping_cart_output" ).load( "llamador.php", {"tipo":"M"});
});

$('#pideCuenta').on('click', function() {
    $(".shopping_cart_holder").fadeIn();
    $("#shopping_cart_output" ).load( "llamador.php", {"tipo":"C"});
});

$('.navbar-nav').width(675);
/*
$('#recommendations').addClass('menuItem');
$('#recommendations').css('background-image','url(images/hamburguesa.png)');

$('#Cafe').addClass('menuItem');
$('#Cafe').css('background-image','url(images/cafeteria.png)');

$('#dessert').addClass('menuItem');
$('#dessert').css('background-image','url(images/dessert.png)');

$('#refreshments').addClass('menuItem');
$('#refreshments').css('background-image','url(images/refrescos.png)');

$('#drinks').addClass('menuItem');
$('#drinks').css('background-image','url(images/drinks.png)');

 $('#vegetarian').addClass('menuItem');
$('#vegetarian').css('background-image','url(images/vegetal.png)');

 $('#Bebidas').addClass('menuItem');
$('#Bebidas').css('background-image','url(images/cervezas.png)');

$('#Pizzas').addClass('menuItem');
$('#Pizzas').css('background-image','url(images/pizza.png)');

$('#Empanadas').addClass('menuItem');
$('#Empanadas').css('background-image','url(images/empanada.png)');
*/
$('.menuItem').on('click', function () {
     $('.menuItem').removeClass('shadows');
    $(this).toggleClass('shadows');
});
