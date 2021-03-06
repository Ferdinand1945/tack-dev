$(document).ready(function(){	
    $(".item_form").submit(function(e){
        var form_data = $(this).serialize();            
        /* AJAX request  - pedidosData.php */
        $.ajax({
            url: "pedidosData.php",
            type: "POST",
            dataType:"json", 
            data: form_data
        }).done(function(data){ 
            var totalItemInCart = $("#items_in_shopping_cart").html(data.items_in_cart);          
            var new_item_qty = $("#items_in_shopping_cart").html(data.all_items);                        
            $('#cart_update_info').empty();          
            if($(".shopping_cart_holder").css("display") == "block"){ 
                $(".shopping_cart_info").trigger( "click" ); 
            }
        })
        e.preventDefault();
    });
    
    
	$(".shopping_cart_info").click(function(e) {
		e.preventDefault();
		$(".shopping_cart_holder").fadeIn();      
//		$("#shopping_cart_output" ).load( "pedidosData.php", {"load_cart_items":"true"});
//by charly
        $("#shopping_cart_output" ).load( "popup_cart_products_table.php", {"load_cart_items":"true"});
                
	});	
    
	
	$( ".close_shopping_cart_holder").click(function(e){
		e.preventDefault(); 
		$(".shopping_cart_holder").fadeOut(500); 
	});
    
    
    
      //aca empieza lo que tenemos que arreglar
	
	$("#shopping_cart_output").on('click', 'a.remove_item_from_cart', function(e) {
// para REMOVER POR COMPLETO un item del carro        
		e.preventDefault(); 
//		var item_id = $(this).attr("products_in_popup_cart");  
        var item_id = $(this).attr("item_id");
        $.ajax({
            url: "popup-cart-ajax.php",
            data: 'remove_item_from_cart='+item_id,
            success: function(response){
                $("#items_in_shopping_cart").text(response);
                $(".shopping_cart_info").trigger( "click" );
                let div_by_id = "#"+item_id;
                $(div_by_id).find('[name=quantity]').val("0");
// falta actualizar los valores de la cantidad de items en la lista de items    
            }
        });
	});  

   
    $("#shopping_cart_output").on("click", "a.add_itm_qty", function(e){
// para AGREGAR  UN SOLO item del carro
        e.preventDefault(); 
        var item_id = $(this).attr("item_id");    
        $.ajax({
            url: "popup-cart-ajax.php",
            data: 'add_item_to_cart='+item_id,
            success: function(response){
                $("#items_in_shopping_cart").text(response);
                $(".shopping_cart_info").trigger( "click" );
                let div_by_id = "#"+item_id;
                let valor_actual = parseInt ($(div_by_id).find('[name=quantity]').val());
                valor_actual +=1;
                $(div_by_id).find('[name=quantity]').val(valor_actual);
            }
        });
    }); 
   
    $("#shopping_cart_output").on("click", "a.subtruct_itm_qty", function(e){
// para REMOVER  UN SOLO item del carro         
        e.preventDefault(); 
        var item_id = $(this).attr("item_id");   
        $.ajax({
            url: "popup-cart-ajax.php",
            data: 'subtruct_itm_qty='+item_id,
            success: function(response){
                $("#items_in_shopping_cart").text(response);
                $(".shopping_cart_info").trigger( "click" );
                let div_by_id = "#"+item_id;
                let valor_actual = parseInt ($(div_by_id).find('[name=quantity]').val());
                valor_actual -=1;
                $(div_by_id).find('[name=quantity]').val(valor_actual);
            }
        });
    
    }); 
        
     //aca termina lo que tenemos que arreglar
    
    
    
    $(".item_disp_image").click(function(e){
        e.preventDefault(); 
        var item_id = $(this).attr("id");
        $.post('displayItem.php',{item_id: id}, function(data) { 
            var item_display_id = $(".item_display_holder").html(data); 
        });
    }); 
    
    $(".item_display_holder").on("click",".close_image", function(e){
        e.preventDefault();
        $("#item_display").hide();
    });    
    
    
    $('.item_disp_img_holder').hover( function() {
        $(this).find('.item_disp_title').css("display","block","width","inherit");
    }, function() {
        $(this).find('.item_disp_title').fadeOut(200);
    });
        
});