<?php
//error_reporting(-1);
if(session_status()==PHP_SESSION_NONE){session_start();}
require_once("database.php");  
if(isset($_GET['command'])=='updatePopupCart')
{

	$product_id	=$_GET['product_id'];
	$qty	    =$_GET['qty'];
	$new_product=array($product_id,$qty);
	if(isset($_SESSION['products_in_popup_cart']))		
	{
		$products_in_popup_cart = $_SESSION['products_in_popup_cart'];
	}
	else
	{
		$products_in_popup_cart =  array ();  //it is an multidimensonal array first for proudct id and second for correspendance qty
	}	
	foreach($products_in_popup_cart as $key => $product)
	{
		if($product[0]==$product_id) //if product id exist remove this record 
		{
			// echo 'exist';	
			unset($products_in_popup_cart[$key]);
		}	
	}
	if($qty!=0) //if product qty is 0 remove this record
	{
		array_push($products_in_popup_cart,$new_product); //pushes new product with qty to popup cart
	}						
	$_SESSION['products_in_popup_cart']=$products_in_popup_cart;
	//print_r($_SESSION['products_in_popup_cart']);
}
if(isset($_GET["remove_item_from_cart"]) && isset($_SESSION["products_in_popup_cart"])){
	$products_in_popup_cart = $_SESSION['products_in_popup_cart'];
	foreach($products_in_popup_cart as $key => $product){
		if($product[0]==$_GET["remove_item_from_cart"]) {
			unset($products_in_popup_cart[$key]);
		}
	}
	$_SESSION['products_in_popup_cart']=$products_in_popup_cart;
	exit(json_encode(count($_SESSION['products_in_popup_cart'])));
}


if(isset($_GET["add_item_to_cart"]) && isset($_SESSION["products_in_popup_cart"])){
    foreach ($_SESSION['products_in_popup_cart'] as &$product) {
        if($product[0]==$_GET["add_item_to_cart"]) {
                $product[1] += 1;
		exit(json_encode(count($_SESSION['products_in_popup_cart'])));
        }
    }
    return 0;
}

if(isset($_GET["subtruct_itm_qty"]) && isset($_SESSION["products_in_popup_cart"])){
    foreach ($_SESSION['products_in_popup_cart'] as $key => &$product) {
        if(($product[0]==$_GET["subtruct_itm_qty"]) && ($product[1]>0)) {
                $product[1] -= 1;
            if ($product[1] == 0) {
//echo "como el producto ".$product[0]." tiene cantidad ".$product[1]." lo vamos a borrar. La sesion actual es: ";
//var_dump($_SESSION);
                unset($_SESSION['products_in_popup_cart'][$key]);
//echo " ## luego de borrar el item, la sesion queda: ";
//var_dump($_SESSION);
            }
        	exit(json_encode(count($_SESSION['products_in_popup_cart'])));        
        }
        
    } // cierra el foreach
    return 0;
}













?>