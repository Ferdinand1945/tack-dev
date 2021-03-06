<div class="container shareCont">          
    <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                </a>
            </div>
                <ul class="nav navbar-nav navbar-left">

                    <?php
                        /*  El menu lo tiro desde la db para crear las categorias */
                        foreach($database->findMenuItem($_SESSION['bar']) as $menuItem){
    echo "<li class='categories'><a id='{$menuItem['category']}' href='#'>" . $menuItem['category']."</a></li>";
                        }
                    ?>
                </ul>
            <!-- /.navbar-collapse -->
        </nav>
</div>
<script>
$(document).ready(function () {

    $('#Recomendaciones').css({'background-position': 'center','width':'15px', 'border-radius': '50%', 'margin': '7px', 'background-image':'url(images/hamburg.png)', 'background-repeat': 'no-repeat', 'padding': '22px 22px', 'display': 'block', 'text-indent': ' -9999px','background-size': '50px', 'border-right': '1px solid #000', 'border-bottom': '1px solid #000' });

    $('#Cafe').css({'background-position': 'center','width':'15px','border-radius': '50%', 'margin': '7px', 'background-image':'url(images/categoria_cafe.png)', 'background-repeat': 'no-repeat', 'padding': '22px 22px', 'display': 'block', 'text-indent': ' -9999px','background-size': '50px', 'border-right': '1px solid #000', 'border-bottom': '1px solid #000' });

    $('#Postre').css({'background-position': 'center','width':'15px','border-radius': '50%', 'margin': '7px', 'background-image':'url(images/categoria_postre.png)', 'background-repeat': 'no-repeat', 'padding': '22px 22px', 'display': 'block', 'text-indent': ' -9999px','background-size': '50px', 'border-right': '1px solid #000', 'border-bottom': '1px solid #000' });

    $('#Soda').css({'background-position': 'center','width':'15px','border-radius': '50%', 'margin': '7px', 'background-image':'url(images/categoria_soda.png)', 'background-repeat': 'no-repeat', 'padding': '22px 22px', 'display': 'block', 'text-indent': ' -9999px','background-size': '50px', 'border-right': '1px solid #000', 'border-bottom': '1px solid #000' });

    $('#Tragos').css({'background-position': 'center','width':'15px','border-radius': '50%', 'margin': '7px', 'background-image':'url(images/categoria_trago.png)', 'background-repeat': 'no-repeat', 'padding': '22px 22px', 'display': 'block', 'text-indent': ' -9999px','background-size': '50px', 'border-right': '1px solid #000', 'border-bottom': '1px solid #000' });

     $('#Vegetariano').css({'background-position': 'center','width':'15px','border-radius': '50%', 'margin': '7px', 'background-image':'url(images/salad.png)', 'background-repeat': 'no-repeat', 'padding': '22px 22px', 'text-indent': ' -9999px', 'display': 'block','background-size': '50px', 'border-right': '1px solid #000', 'border-bottom': '1px solid #000'});

     $('#Bebidas').css({'background-position': 'center','width':'15px','border-radius': '50%', 'margin': '7px', 'background-image':'url(images/beer.png)', 'display': 'block', 'background-repeat': 'no-repeat', 'padding': '22px 22px', 'display': 'block','text-indent': ' -9999px','background-size': '50px', 'border-right': '1px solid #000', 'border-bottom': '1px solid #000'});

    $('#Pizzas').css({'background-position': 'center','width':'15px','border-radius': '50%', 'margin': '7px', 'background-image':'url(images/pizza.png)', 'display': 'block', 'background-repeat': 'no-repeat', 'padding': '22px 22px', 'display': 'block','text-indent': ' -9999px','background-size': '50px', 'border-right': '1px solid #000', 'border-bottom': '1px solid #000'});

    $('#Empanadas').css({'background-position': 'center','width':'15px','border-radius': '50%', 'margin': '7px', 'background-image':'url(images/empanada.png)', 'display': 'block', 'background-repeat': 'no-repeat', 'padding': '22px 22px', 'display': 'block','text-indent': ' -9999px','background-size': '50px', 'border-right': '1px solid #000', 'border-bottom': '1px solid #000'});

});

</script>
