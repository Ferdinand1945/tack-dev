<?php

/* Start session si no esta iniciada */
if(session_status()==PHP_SESSION_NONE){session_start();}
require_once("database.php");  // request database connection con los objects

//echo "popup_cart_products_table : 1 <br>";
$db=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

if(isset($_POST["load_cart_items"])){
    if(isset($_SESSION["products_in_popup_cart"]) && count($_SESSION["products_in_popup_cart"])>0){
?>
<table class="table text-center" width="100%">
    <thead>
        <tr class='itemInCardRow'>

            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sn=0;
        $total_amt=0;
        foreach ($_SESSION["products_in_popup_cart"] as $key => $product)
        {
            $sn++;
            $sql="SELECT * FROM `shopping_items` WHERE `id`=".$product[0]."";
            $result=$db->query($sql);
            $row=mysqli_fetch_object($result);

            // print_r($row);

        ?>
        <tr class='itemInCardRow'>
            <!-- <td class='itemInCartDisplay'>
<img class='img-responsive item_disp_image' style='max-width:80px; float:left;' src="images/<?//php echo $item["item_image"]; ?>">
</td>-->

            <td class='itemInCartDisplay'>
                <?=utf8_encode($row->item_name);?>
                <!-- .", size ". $item["item_size"]   -->
            </td>

            <td class='itemInCartDisplay'>
                <a href='#' class='subtruct_itm_qty quantity_change' item_id="<?php echo $product[0]; ?>">-</a>
                <?php
    // by claper, cambio un span por un text en disable
//                    echo "<input class='quantity' name='".$product[0]."' value='".$product[1]."' disabled/>";
                    echo "<span class='quantity'> ".$product[1]; " </span>";
//                    echo "<span class='quantity' name=".$product[1]."  > ".$product[1]; " </span>";
                ?>
                <a href='#' class='add_itm_qty quantity_change' item_id="<?php echo $product[0]; ?>">+</a>
            </td>
            <td>$ <?= $row->item_price; ?></td>
            <td class='itemInCartDisplay'>
               $ <?php echo $product[1]*$row->item_price; $total_amt+=$product[1]*$row->item_price;?>
            </td>
            <td class='itemInCartDisplay'>
                <a href="#" class="remove_item_from_cart" item_id="<?php echo $product[0]; ?>"><img src="images/53639.png" style="width: 20px; height: 20px;"></a>
            </td>
        </tr>



        <?php } ?>
    </tbody>

    <tfoot>
        <tr class='itemInCardRow'>

            <th></th>
            <th></th>
            <th></th>

            <th> <hr>$ <?=$total_amt;?></th>
        </tr>


    </tfoot>
</table>
<script>
    $(function(){
        $('#ordenaPedido').on('click', function() {
//            $.get("llamador.php?tipo=C");
            $(".shopping_cart_holder").fadeIn();
            $("#shopping_cart_output" ).load( "pedido.php", {"tipo":"C"});
//            $(".claperProducto [name=quantity]").filter(function(){return this.value>0}).parents(".claperProducto").val("0");
            $(".claperProducto [name=quantity]").val("0");
//            return false;
        });
    });
</script>
    <div style="text-align: center; margin-bottom: 15px;">
        <a id="ordenaPedido" href='#'><button id="ordenaPedido" type="button" class="btn checkoutButton">Enviar pedido</button></a>

    </div>
<?php
    }else{
        exit("No tienes ningun producto seleccionado");
    }
}
die;
