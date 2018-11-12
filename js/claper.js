$(document).ready(function () {
    var listaProductos = [];
    
    var carroCompras = [];
// $(".claperProducto [name=quantity]").filter(function(){return this.value>0}).parents(".claperProducto")
    
    function inicio() {
        listaProductos = $(".claperProducto");
    }
/*    
    var filtrarCategoria = function(cat) {
        $(".claperProducto").slideUp(); 
        $('.claperProducto [value=Pizza]').parents().slideDown();
    }
*/
    inicio();
    $('#btnPedir').hide();
    
    $(".categories").click(function () {
        $("#categoria").text(this.innerText);
        $(".claperProducto").hide();
        var criterio = ".claperProducto [value=" + this.innerText + "]";
        $(criterio).parents().slideDown();
    });


    $('.close_shopping_cart_holder').on('click', function () {
        if ($('#items_in_shopping_cart').text() === '0') {
            $('#btnPedir').fadeOut(800);
        }
    });
    
    $('.claperProducto').on("change", function () {
$("#items_in_shopping_cart").text($(".claperProducto [name=quantity]").filter(function(){return this.value>0}).parents(".claperProducto").length);
if (($(".claperProducto [name=quantity]").filter(function(){return this.value>0}).parents(".claperProducto")).length==0) {
    $('#btnPedir').fadeOut(800);
}else {
    $('#btnPedir').fadeIn( 800 );
}        
    });
                         
$(function(){
    
        
    // This button will increment the value
    $('.qtyplus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
// este control se hace cuando se cmabia el valor de QTY        
        $('#btnPedir').fadeIn( 800 );
        // nos quedamos con el nombre del boton, coincide con el ID del div que lo contiene
        var qty                   = parseInt($(this).parent('li').find('.qty').val())+1;
        var product_id            = parseInt($(this).parent('li').parent('div').attr('id'));    
        updatePopupCart(product_id,qty);          
        fieldName = $(this).attr('name');
        // nos quedamos con el valor que tiene el DIV en el campo quantity
        salida = $('#' + fieldName + ' [name=quantity]').val(qty);

// este control se debe hacer en .qty on change            
        $("#items_in_shopping_cart").text($(".claperProducto [name=quantity]").filter(function(){return this.value>0}).parents(".claperProducto").length);
    });
    
    
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        if (parseInt($(this).parent('li').find('.qty').val())>0){
        // Get the field name
        fieldName = $(this).attr('name');
        // Get its current value
        var qty                   = parseInt($(this).parent('li').find('.qty').val())-1;
        var product_id            = parseInt($(this).parent('li').parent('div').attr('id'));   
        updatePopupCart(product_id,qty);                  
        salida = $('#'+fieldName+' [name=quantity]').val(qty);          
// este control se debe hacer en .qty on change   
$("#items_in_shopping_cart").text($(".claperProducto [name=quantity]").filter(function(){return this.value>0}).parents(".claperProducto").length);
if (($(".claperProducto [name=quantity]").filter(function(){return this.value>0}).parents(".claperProducto")).length==0) {
$('#btnPedir').fadeOut(800);
}    
        }
    });
    
        function updatePopupCart(product_id,qty){
// alert('product_id='+product_id+'&qty='+qty);
            $.ajax({
                url: "popup-cart-ajax.php",
                data: 'product_id='+product_id+'&qty='+qty+'&command=updatePopupCart',
                success: function(response){
                    console.log(response);
                }
            });
        }
    
});

//   $('.btnPe').on('click', function(){
//       $('.shopping_cart_info_holder').append();
//       $(".claperProducto [name=quantity]").filter(function(){return this.value>0}).parents(".claperProducto");
//   });
    
});


$(document).ready(function() {	

		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(500);	
		$('#mask').fadeTo("slow",0.9);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2.1);
		$(id).css('left', '15px');
	
		//transition effect
		$(id).fadeIn(500); 	
	
	//if close button is clicked
		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});		
    setTimeout(function(){
        $(id).fadeOut();
        $('#mask').fadeOut();
    },2000);
     

	
});