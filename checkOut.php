<?php 

    require_once("header.php");

    if(!isset($_SESSION['items']) || count($_SESSION['items'])==0  || !isset($_SESSION['bar']) || !isset($_SESSION['mesa'])){
        header("location: index.php");
    }




?>
<body>
    <div class="container" >
    <h2>Pedido</h2>
        <table class='table'>
            <?php
            $total=0;
            foreach($_SESSION["items"] as $item){
            ?>
            <tr class='itemInCardRow'>
                <td class='itemInCartDisplay'>
                    <img class='img-responsive item_disp_image' style='max-width:40px; float:left;' src="images/<?php echo $item["item_image"]; ?>">
                </td>
                <td class='itemInCartDisplay'>
                    <?php
                        //echo $item["item_name"] .", size ". $item["item_size"];
                        echo $item["item_name"]."(".$item['id'].")";
                    ?>
                </td>
                <td class='itemInCartDisplay'>
                    <?php echo "<span class='quantity'>Qty ".$item["item_qty"]."</span>"; ?>
                </td>
                <td class='itemInCartDisplay'>
                    <?php echo "$".sprintf("%.2f", ($item["item_price"] * $item["item_qty"])); ?>
                </td>
            </tr>
            <?php

                $total += ($item["item_price"] * $item["item_qty"]);

                }
            ?>
            <tr>
                <td class='itemInCartDisplay' colspan='4'>
                    <div>
                        <a href='pedido.php'><button type="button" class="btn checkout_btn">Hacer pedido</button></a>
                        <a href='index.php'><button type="button" class="btn continue_shopping_btn">Seguir comprando</button></a>

                    </div>
                </td>
                 <td class='itemInCartDisplay' style='text-align:right;'>
                    <div class="cart-products-total">
                        <span>Total : <span style='font-size:20px; color:#008cba;'></span>
                            <?php
                                echo "$".sprintf("%.2f",$total);
                            ?>
                        </span>
                    </div>
                </td>
            </tr>
        </table>
    </div>

<?php

    require_once("footer.php");
?>
