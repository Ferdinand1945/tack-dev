<?php

/* Start session si no esta iniciada */
if(session_status()==PHP_SESSION_NONE){session_start();}
require_once("database.php");  // request database connection con los objects 

if(isset($_POST["item_id"]) && isset($_POST['item_qty'])){
    /* Get $_POST data y meterlos en un array */
    $added_item["item_id"]=$_POST['item_id'];
    $added_item["item_qty"]=$_POST['item_qty'];
    $added_item["item_size"]=$_POST['item_size'];

   
    $items = $database->find_by_query("SELECT * FROM shopping_items WHERE id='{$added_item["item_id"]}' LIMIT 1");
    
    
	foreach($items as $item){
		$added_item["item_name"] = $item['item_name']; 
		$added_item["item_price"] = $item['item_price'];
//        $added_item["item_image"] = $item['item_image'];
		$_SESSION["items"][$added_item['item_id']] = $added_item;        
	}	
   
    exit(json_encode(array('items_in_cart'=>count($_SESSION['items']))));  
    
}

if(isset($_POST["load_cart_items"])){

    
	if(isset($_SESSION["items"]) && count($_SESSION["items"])>0){
    ?>
        <table class='table'> <!--aca empieza la tabla de pedidos --> 
        <?php
        $total=0; // define total para que no me tire mas el puto Error: 'Undefined variable: total in....'
        
        /* Loop de los items de la session y mostrar la data */		
        foreach($_SESSION["items"] as $item){ 		
        ?>			
            <tr class='itemInCardRow'>            
               <!-- <td class='itemInCartDisplay'>
                    <img class='img-responsive item_disp_image' style='max-width:80px; float:left;' src="images/<?//php echo $item["item_image"]; ?>">
                </td>-->

                <td class='itemInCartDisplay'>
                    <?php echo $item["item_name"]; ?>         <!-- .", size ". $item["item_size"]   -->
                </td>

                <td class='itemInCartDisplay'>
                    <a href='#' class='subtruct_itm_qty quantity_change' item_id="<?php echo $item["item_id"]; ?>">-</a>  
                        <?php echo "<span class='quantity'>Qty ".$item["item_qty"]."</span>"; ?>    
                    <a href='#' class='add_itm_qty quantity_change' item_id="<?php echo $item["item_id"]; ?>">+</a>        
                </td>

                <td class='itemInCartDisplay'>
                    <?php echo "$".sprintf("%.2f", ($item["item_price"] * $item["item_qty"])); ?>
                </td>
                <td class='itemInCartDisplay'>
                    <a href="#" class="remove_item_from_cart" item_id="<?php echo $item["item_id"]; ?>">x</a>            
                </td>            
            </tr>
            
        <?php
            /* calcular el total */
            $total += ($item["item_price"] * $item["item_qty"]);            
            }
        ?>
            <!-- Los botones de checkout y el total -->
            <tr>                 
                <td class='itemInCartDisplay' colspan='4'>
                    <div>
                        <a href='pedido.php'><button type="button" class="btn checkoutButton">Enviar pedido</button></a>
<!--                        <a class="checkoutButton" href="view_cart.php" CHECKOUT</a>            -->
                    </div>
                </td>                
                 <td class='itemInCartDisplay' style='text-align:right;'>
                    <div class="cart-products-total">                        
                        <span>Total : <span style='font-size:20px; color:#008cba;'></span>
                            <?php
                                // Devolver el precio total solo con 2 decimales
                                echo "$".sprintf("%.2f",$total); 
                            ?>
                        </span>
                    </div>
                </td>
            </tr>
        </table>
    
    <?php 
       
	}else{
       
		exit("No tienes ningun producto seleccionado");
	}    
}

/* Agregar producto - Le tiro un maximo de 5 para empezar  */
if(isset($_GET["add_itm_qty"]) && isset($_SESSION["items"])){
    if(isset($_SESSION['items'][$_GET["add_itm_qty"]])){
        if($_SESSION['items'][$_GET["add_itm_qty"]]["item_qty"] <= 4){
            $_SESSION['items'][$_GET["add_itm_qty"]]["item_qty"]+=1;
        }else{
            $_SESSION['items'][$_GET["add_itm_qty"]]["item_qty"]=5;    //aca le cambias la cantidad perry
        }          
    }        
    unset($_GET["add_itm_qty"]);
    exit(json_encode(array('items_in_cart'=>count($_SESSION['items']),(array('all_items'=>$_SESSION["items"])))));     
}


if(isset($_GET["subtruct_itm_qty"]) && isset($_SESSION["items"])){
    if(isset($_SESSION['items'][$_GET["subtruct_itm_qty"]])){
        if($_SESSION['items'][$_GET["subtruct_itm_qty"]]["item_qty"] >= 2){
            $_SESSION['items'][$_GET["subtruct_itm_qty"]]["item_qty"]-=1;    
        }else{
            $_SESSION['items'][$_GET["subtruct_itm_qty"]]["item_qty"]=1;    
        }        
    }
    unset($_GET["subtruct_itm_qty"]);

    exit(json_encode((array('item_qty'=>$_SESSION["items"]))));     
}

/* Borrar producto del pedido */
if(isset($_GET["remove_item_from_cart"]) && isset($_SESSION["items"])){
    $item_id = $_GET["remove_item_from_cart"];
    if(isset($_SESSION["items"][$item_id])){
        unset($_SESSION["items"][$item_id]);  // Eliminar/unset producto
    }
    exit(json_encode(array('items_in_cart'=>count($_SESSION['items']))));    
}