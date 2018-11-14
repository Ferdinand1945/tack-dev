<script>
    $(function(){
        $('#llamaMozo').on('click', function() {
//            $.get("llamador.php?tipo=M");
            $(".shopping_cart_holder").fadeIn();
            $("#shopping_cart_output" ).load( "llamador.php", {"tipo":"M"});
//            alert('ahora va el pinche mozo wey');
//            return false;
        });

        $('#pideCuenta').on('click', function() {
//            $.get("llamador.php?tipo=C");
            $(".shopping_cart_holder").fadeIn();
            $("#shopping_cart_output" ).load( "llamador.php", {"tipo":"C"});
//            alert('ya te va la cuentica');
//            return false;
        });
/*
        $('#ordenaPedido').on('click', function() {
//            $.get("llamador.php?tipo=C");
            $(".shopping_cart_holder").fadeOut();
            alert('ya te va el pedido');
            $("#shopping_cart_output" ).load( "pedido.php", {"tipo":"C"});
            alert('ya te va el pedido');
//            return false;
        });
*/
    });
</script>
