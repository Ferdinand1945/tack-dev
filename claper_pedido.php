<?php 

require_once("header.php");
if( !isset($_SESSION['products_in_popup_cart']) || count($_SESSION['products_in_popup_cart'])==0 || !isset($_SESSION['bar']) || !isset($_SESSION['mesa'])  ){
    header("location: index.php");
}

$servername = "localhost";
$database = "tack";
$username = "phpmyadmin";
$password = "tack2018";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `Pedidos` (`codigoPedido`, `codigoBar`, `estado`, `mesa`, `tipoPedido`) VALUES (NULL, '".$_SESSION['bar']."', '1', '".$_SESSION['mesa']."', 'P')";

//echo $sql."<br>";

$resultado = mysqli_query($conn,$sql);
if (!$resultado){
    echo "error de bd<br>";
    session_destroy();
    die("connection failed: " . mysqli_connect_error());
}
$ultpedido = mysqli_insert_id($conn);

//if ($_SESSION['tipoPedido'] == 'P' ) {

//var_dump($_SESSION["products_in_popup_cart"]);

    foreach($_SESSION["products_in_popup_cart"] as $item){
        $sql = "INSERT INTO `contenidoPedidos` (`codigoContenido`, `codigoPedido`, `codigoProducto`, `cantidad`) VALUES (NULL, '".strval($ultpedido)."', '".$item[0]."', '".$item[1]."')";
//echo $sql."<br>";

        $resultado = mysqli_query($conn,$sql);
        if (!$resultado){
            echo "<br> error de bd ";
            die("connection failed: " . mysqli_connect_error());
        }

/*
        echo "<br> ".$sql." <br>";
        echo "producto: ".$item["item_name"]."<br>" ;
        echo "Qty ".$item["item_qty"];
        echo "<br".$item["item_price"] ;
*/
    }


// } cierra el if tipoPedido == P
mysqli_close($conn);
//session_destroy();
unset($_SESSION['products_in_popup_cart']);
//header("location: index.php?bar=".$_SESSION['bar']."&mesa=".$_SESSION['mesa']);
exit ("Su comanda esta siendo procesada");
//header("location: index.php");
require_once("footer.php");
?>
