<?php

echo "el parametro es :".$_GET['d']."<br>";

//$var = urldecode(strtr($_GET['d'],"'",'%'));

echo "luego de desencodear queda: '".$_GET['d']."'<br>";

echo "desencriptado queda: ".openssl_decrypt($_GET['d'], 'aes128','claper',0,'tacktacktacktack')."<br>";


?>