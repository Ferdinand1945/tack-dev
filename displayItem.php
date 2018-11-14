<?php
if(session_status()==PHP_SESSION_NONE){session_start();}
require_once("database.php");



/* Borrar productos del pedido */
if(isset($_POST['item_id'])){
/* Fetchar todos los productos de la db que hagan match con el $_POST['item_id'] Limit 1 en el final para que se muestre solo 1. */
    $items = $database->find_by_query("SELECT * FROM shopping_items WHERE id='{$_POST['item_id']}' LIMIT 1");
}
echo "displayItem.php <br>";

foreach($items as $item){ ?>
    <div id='item_display'>
        <span class="close_image">Cerrar</span>
        <img class='item_display_img' src="images/<?php echo $item['item_image']; ?>">
    </div>
<?php }  ?>
