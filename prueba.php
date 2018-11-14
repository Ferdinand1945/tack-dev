<?php
$parametro_encriptado = $_GET['d'];

echo "parametro: ".$parametro_encriptado."<br>";

$parametro_encriptado = openssl_encrypt($parametro_encriptado, "aes128","claper",0,"tacktacktacktack");

echo "datos encriptados: ".$parametro_encriptado."<br>";

echo "datos en unicode para pasar a URL: ".urlencode($parametro_encriptado)."<br";
//   +IfuAzMxOoI0G9INfdUuhN3cNyCjWmgXVvkn+nFhVgw=

echo "datos desencriptados: ".openssl_decrypt($parametro_encriptado, "aes128","claper",0,"tacktacktacktack")."<br>";

echo "encode : ". urlencode("bar=2&mesa=4");

?>
