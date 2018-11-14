<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/vendor.min.css">
    <link rel="stylesheet" href="dist/main.min.css">
    <title>{{ isset($title) ? $title : '' }} - Tack</title>
</head>
<body>
    <div style="height:75px;">
        <div class="theHeader" style="height:65px;">
        <i class="logo">
            <img src="images/bares/2.jpg" style="width: 60px; height: 60px; border-radius: 55%; border: 1px solid #000;">
       </i>
           <div class="nombre_bar" style="margin-top: -58px; margin-left: 71px;">
           <h3>
               Hey Chop       </h3>
           </div>

           <div class="llamarMozo" style="margin-top: -90px; margin-left: 210px;">
    <!-- PERRY -->
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
          <div class="container shareCont">
        <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                    </a>
                </div>
                    <ul class="nav navbar-nav navbar-left">
                        <li class='categories'>
                            <a class="menuItem bebidas">Bebidas</a>
                        </li>
                        <li class='categories'>
                            <a class="menuItem cafe">Cafe</a>
                        </li>
                        <li class='categories'>
                            <a class="menuItem empanadas">Empanadas</a>
                        </li>
                        <li class='categories'>
                            <a class="menuItem pizzas">Pizzas</a>
                        </li>
                        <li class='categories'>
                            <a class="menuItem dessert">dessert</a>
                        </li>
                        <li class='categories'>
                            <a class="menuItem recommendations">recommendations</a>
                        </li>
                        <li class='categories'>
                            <a class="menuItem refreshments">refreshments</a>
                        </li>
                        <li class='categories'>
                            <a class="menuItem drinks">drinks</a>
                        </li>
                        <li class='categories'>
                            <a class="menuItem vegetarian">vegetarian</a>
                        </li>
                    </ul>
                <!-- /.navbar-collapse -->
            </nav>
    </div>

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

@yield('content')
<script src="dist/vendor.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="dist/main.min.js"></script>
</body>
</html>
