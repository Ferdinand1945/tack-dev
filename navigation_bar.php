<div class="container shareCont">          
    <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                </a>
            </div>
                <ul class="nav navbar-nav navbar-left">

                    <?php
                        $cantidad_categorias = 0;
                        /*  El menu lo tiro desde la db para crear las categorias */
                        foreach($database->findMenuItem($_SESSION['bar']) as $menuItem){
                            $cantidad_categorias ++;
    echo "<li class='categories'><a id='{$menuItem['category']}' menu=".$menuItem["category"]
                            .">" . $menuItem['category']."</a></li>";
                        }
                    ?>
                </ul>
            <!-- /.navbar-collapse -->
        </nav>
</div>

<script>
$(document).ready(function () {

    $('.navbar-nav').width(<?php
        echo strval($cantidad_categorias*75);
                           ?>);

    $('#Recomendaciones').addClass('menuItem');
    $('#Recomendaciones').css('background-image','url(images/hamburguesa.png)');

    $('#Cafe').addClass('menuItem');
    $('#Cafe').css('background-image','url(images/cafeteria.png)');

    $('#Postre').addClass('menuItem');
    $('#Postre').css('background-image','url(images/postre.png)');

    $('#Soda').addClass('menuItem');
    $('#Soda').css('background-image','url(images/refrescos.png)');

    $('#Tragos').addClass('menuItem');
    $('#Tragos').css('background-image','url(images/tragos.png)');

     $('#Vegetariano').addClass('menuItem');
    $('#Vegetariano').css('background-image','url(images/vegetal.png)');

     $('#Bebidas').addClass('menuItem');
    $('#Bebidas').css('background-image','url(images/cervezas.png)');

    $('#Pizzas').addClass('menuItem');
    $('#Pizzas').css('background-image','url(images/pizza.png)');

    $('#Empanadas').addClass('menuItem');
    $('#Empanadas').css('background-image','url(images/empanada.png)');

    $('.menuItem').on('click', function () {
         $('.menuItem').removeClass('shadows');
        $(this).toggleClass('shadows');
    });
});

</script>
