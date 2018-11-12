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
        die ("<img src=images/error.png>");
    }
?>
<body>
         <script type="text/javascript" src="js/claper.js"></script>    

   <div class="theHeader">
    <i class="logo">
        <img src="images/bares/<?php echo $_SESSION['bar'].".jpg"; ?>" style="width: 80px; height: 80px; border-radius: 55%; border: 1px solid #000;">
       </i>
       <div style="margin-top: -67px; margin-left: 90px;">
    <span>Bienvenido a </span>
       <h3>
           <?php 
               echo  "'".$database->getNombreBar ($_SESSION['bar']) ."'<br>en mesa ".$_SESSION['mesa']; 
               $sql = "SELECT Nombre FROM Bares WHERE codigo='".$_SESSION['bar']."'";
//$cla = $database->getNombreBar ($_SESSION['bar']);               
//               $items = $database->find_by_query($sql);
//echo $sql;
           ?> 
       </h3>
           </div>
       
       <div class="llamarMozo" style="margin-top: -109px; margin-left: 240px;">
           <div class='shopping_cart_info_holder' style="width: 50px; margin-top: 40px;">
   
        <div class="" style="height: 70px;">
            <a href="#" class="shopping_cart_info" title="Shopping cart item total">             
                            
                <span id='items_in_shopping_cart' style='color:#ff5500; font-size:25px;'>
                    <?php 
                        /* "Si hay productos en "pedidos" los muestro aca, sino que muestte "nada seleccionado"*/
                        if(isset($_SESSION["items"])){   
                            if(count($_SESSION["items"]) > 0){
                                echo count($_SESSION["items"]);
                            }else{
                                echo "0";
                            }
                        }else{
                            echo "0";
                        }
                    ?>
                </span>
                    <img src="images/manu.png" style="width: 50px; height: 60px;">
            </a>
        </div>
    </div>
       </div>
       
    </div>
     <hr style="border-color: #167f08;">
    
   
      <?php
        require_once('claper_navigation_bar.php');
    ?>
    <!-- Este se podria usar como el menu prioncipal en realidad, es el "pedidos" -->
    <div class="shopping_cart_holder">
        <a href="#" class="close_shopping_cart_holder" >Cerrar pedido</a>
        <h2>Productos</h2>
        <div id="shopping_cart_output">
        </div>
        <button style="background-color: #000; color: #fff; padding: 10px;">LLamar Mozo para consulta</button>
    </div>
    
    <!--    Mostrar producto-->
    <div class="item_display_holder"></div>

    <!-- El update de que "se ha agregado un producto" (se podria volar a la mierda pero como test me sirve)-->
    <div id='cart_update_info'></div>

    <?php    
        /* Mostrar los productos dependiendo de la categoria */
        if(isset($_GET['menu'])){
            $menuCategory = $_GET['menu'];        
            /* para mostrar todos los productos click en el logo nomas o hacer un boton que diga "todos" no se...  */
            if($menuCategory =="main"){
                $items = $database->find_by_query("SELECT * FROM shopping_items WHERE codigoBar=".$_SESSION['bar']);    
            /* Categorias */
            }else{            
                $items = $database->find_by_query("SELECT * FROM shopping_items WHERE category='{$menuCategory}' AND  codigoBar=".$_SESSION['bar']);    
            }
        }else{
            $items = $database->find_by_query("SELECT * FROM shopping_items  WHERE codigoBar=".$_SESSION['bar']);
        }
    ?>  
    
    <div class='container' style='padding:10px; float: right; width: 290px;'>
    <!--Mostrar los productos en la lista -->
         
       <?php 
        if(isset($_GET['menu'])){
            $menuKategory = $_GET['menu']; 
        echo '<div id="categoria"><center>'.$menuKategory.'</center></div>';
        }
        ?>
        
        <ul class="list_of_items">
            <?php foreach($items as $item) { ?>
                <div class="claperProducto" id="<?php echo $item["id"]; ?>">    
                    <li>                                      
                        <form class="item_form">                            
                            <div class='item_disp_img_holder'>
                                <div class='item_title_holder'>
                                    <span class='item_disp_title'><?php echo $item["item_name"]; ?></span>
                                </div>
                            </div> 
                             <div style=''>                          
                                <li>
                                    <span  itemclass="nombreProducto"  style='padding:0px; font-size:15px;float: left; margin-left: 0px;'><?php echo $item['item_name'] ; ?></span>
                                </li>
                                <li>
                                    <span  style='padding:0px; font-size:10px;float: left; margin-left: 0px;'><?php echo $item['item_desc'] ; ?></span>
                                </li>
                               
                       
                                <span style='padding:4px; font-size:15px;float: left;margin-left: 15px; margin-right:25px;'><?php echo "$".$item["item_price"]; ?></span>
                                  <select name="item_qty">
                                        <?php
                                            // Elegir cantidad
                                            $maxQty=5;
                                            for($i=0;$i<=$maxQty;$i++){
                                                echo "<option value='{$i}'>$i</option>";
                                            }
                                        ?>
                                    </select>
                                <input name="item_nombre" type="hidden" value="<?php echo $item['item_name'] ; ?>">
                                <input name="item_descripcion" type="hidden" value="<?php  echo $item['item_desc'] ;  ?>">

                                <input name="item_categoria" type="hidden" value="<?php echo $item["category"]; ?>">
                                <input name="item_id" type="hidden" value="<?php echo $item["id"]; ?>">
                                <button class='add_item_to_cart' type="submit">Agregar</button>
                            </div>
                          
                            <div class="item_disp_values" style="display:none;">
                          
                               <div >Tamaño:
                                    <select name="item_size" >
                                        <?php 
                                            /* Elegir el tamaño (se vera si se mantiene o no) */
                                            $options=array("-");
                                            foreach($options as $option){
                                                echo "<option value='{$option}'>$option</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                               
                            </div>
                        </form>
                    </li>
                    <input name="item_nombre" type="hidden" value="<?php echo $item['item_name'] ; ?>">
                    <input name="item_descripcion" type="hidden" value="<?php  echo $item['item_desc'] ;  ?>">
                    <input name="item_categoria" type="hidden" value="<?php echo "claper_cat_".$item["category"]; ?>">
                    <input name="item_id" type="hidden" value="<?php echo $item["id"]; ?>">
                    <input name="item_precio" type="hidden" value="<?php echo "$".$item["item_price"]; ?>">


                </div>
            <?php } ?>
        </ul>
    </div>
     <div class="push"></div>
    
<!--  Get footer-->
    <?php
    
//mysqli_close($conn);

        require_once("footer.php");
    ?>
    <!-- Esto es un producto desarrollado 100% por Tack! Co. -->
