<?php 
    require_once("header.php");
//    session_start();
   if (isset ($_GET['bar']) ){
       $_SESSION['bar'] = $_GET['bar'];
   }
   if (isset ($_GET['mesa']) ){
        $_SESSION['mesa'] = $_GET['mesa'];
    }

    if ( (!isset ($_SESSION['bar']) ) || (!isset ($_SESSION['mesa']))  ){
        echo "ingresar a http://www.tack.uy/tackintosh/escribir.php y armar la URL ahi<br>";
        die ("<div><img src=images/error.png></div>");
    }
?>

<style>
    #myform {
        text-align: center;
        padding: 5px;
        border: 1px dotted #ccc;
        margin: 2%;
    }
    .qty {
        width: 20px;
        height: 17px;
        text-align: center;
    }
    .quantity {
        width: 20px;
        height: 17px;
        text-align: center;
    }
    input.qtyplus { width:25px; height:25px;}
    input.qtyminus { width:25px; height:25px;}
</style>
<body>
<div style="height:75px;">
   <div class="theHeader" style="height:65px;">
    <i class="logo">
        <img src="images/bares/<?php echo $_SESSION['bar'].".jpg"; ?>" style="width: 60px; height: 60px; border-radius: 55%; border: 1px solid #000;">
       </i>
       <div class="nombre_bar" style="margin-top: -58px; margin-left: 71px;">
       <h3>
           <?php
//aca se muestra el nombre del bar charly, en el div "nombre_bar"
                echo $database->getNombreBar($_SESSION['bar']);
           ?>
       </h3>
       </div>

       <div class="llamarMozo" style="margin-top: -90px; margin-left: 210px;">
<!-- PERRY -->
       <?php
           require_once('pedirMozo.php');
        ?>
<!-- TERMINA PERRY -->
       </div>
       <div style="margin-top: -80px; margin-left: 220px;">
           <a id="llamaMozo" href="#">
               <img src="images/llamarmozo.png" style="width: 60px; height: 60px; margin-top: 33px;">
            </a>
        </div>
        <div style="margin-top: -50px; margin-left: 285px;">
        <a id="pideCuenta" href="#">
            <img src="images/cuenta.png" style="width: 60px; height: 60px; margin-top: -14px;">
        </a>
       </div>
    </div>
     <hr style="border-color: #167f08;">

    </div>
      <?php
        require_once('navigation_bar.php');
    ?>

         <hr style="border-color: #167f08;">

    <!-- Este se podria usar como el menu prioncipal en realidad, es el "pedidos" -->
    <div class="shopping_cart_holder">
        <a href="#" class="close_shopping_cart_holder" ><img src="images/53639.png" style="width: 25px; height: 25px;"></a>
        <div id="shopping_cart_output">

        </div>
    </div>

    <!--    Mostrar producto-->
    <div class="item_display_holder"></div>

    <!-- El update de que "se ha agregado un producto" (se podria volar a la mierda pero como test me sirve)-->
    <div id='cart_update_info'></div>

    <?php
        $items = $database->find_by_query("SELECT * FROM shopping_items  WHERE codigoBar=".$_SESSION['bar']);
    ?>

    <div class='container' style='padding:10px; margin-left: -10px; height: 330px; overflow: auto; margin-top: -8px;'>
    <!--Mostrar los productos en la lista -->
    <div class='shopping_cart_info_holder' style="text-align: right;">

    <a href="#" id="btnPedir" class="shopping_cart_info" style="margin-bottom:0px!important" title="Shopping cart item total">
    <div class="btnPe">
        <span id='items_in_shopping_cart'>
        </span>
    </div>
    </a>


    </div>
    <?php
//        echo '<div id="categoria"></div>';
    ?>

    <ul class="list_of_items">
    <?php foreach($items as $item) { ?>
     <div class="claperProducto"  id="<?php echo $item["id"]; ?>">
        <li>
            <span style='padding:0px; font-size:15px;float: left; margin-left: 0px;'><?php echo utf8_encode($item['item_name']) ; ?></span>
            <br>
            <span style='padding:0px; font-size:10px;float: left; margin-left: 0px;'><?php echo utf8_encode($item['item_desc']) ; ?></span>
            <br>
            <span style='padding:4px; font-size:15px;float: left; margin-right:25px;'><?php echo "$".$item["item_price"]; ?></span>
            <input type='button' value='-' class='qtyminus' name='<?php echo  $item["id"]; ?>' />
<!--            <input type='text' id='quantity<?php //echo $item["id"]; ?>' value='0' step="1" class='qty' /> -->
            <input type='text' name='quantity' value='0' class='qty' disabled/>
            <input type='button' value='+' class='qtyplus' name='<?php echo  $item["id"]; ?>' />
<!--               <button class='add_item_to_cart' type="submit">Agregar</button> -->
            <input name="item_categoria" type="hidden" value="<?php echo utf8_encode($item["category"]); ?>">
            <input name="item_id" type="hidden" value="<?php echo $item["id"]; ?>">
            <div class="item_disp_values" style="display:none;"> </div>
        </li>
<!--        <input id="quantity<?php //echo $item["id"]; ?>" type="hidden" value='0'> -->
        <input name="item_nombre" type="hidden" value="<?php echo utf8_encode($item['item_name']) ; ?>">
        <input name="item_descripcion" type="hidden" value="<?php  echo utf8_encode($item['item_desc']) ;  ?>">
        <input name="item_categoria" type="hidden" value="<?php echo $item["category"]; ?>">
        <input name="item_id" type="hidden" value="<?php echo $item["id"]; ?>">
        <input name="item_precio" type="hidden" value="<?php echo "$".$item["item_price"]; ?>">

    </div>

    <?php } ?>
    </ul>

    </div>
    <div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
     <img src="images/tack-logo-white.png" style="width: 200px;">
    </div>

  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

   <!--  <div class="push"></div>-->

<!--  Get footer-->
    <?php

//mysqli_close($conn);

       // require_once("footer.php");
    ?>
    <!-- Esto es un producto desarrollado 100% por Tack! Co. -->
<?php
unset ($_SESSION["products_in_popup_cart"]);
?>
