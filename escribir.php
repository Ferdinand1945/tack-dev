<?php
//$url = $_GET['d'];
/*
echo "parametro: ".$url."<br>";

$parametro_encriptado = openssl_encrypt($url, "aes128","claper",0,"tacktacktacktack");

echo "datos encriptados: ".$parametro_encriptado."<br>";

//echo "datos en unicode para pasar a URL: ".urlencode($parametro_encriptado)."<br";
//$algo = strtr(base64_encode($parametro_encriptado), '+/=', '-_,');
$algo=urlencode(utf8_encode($parametro_encriptado));
echo "datos en unicode para pasar a URL2: ".$algo."<br>";
//   +IfuAzMxOoI0G9INfdUuhN3cNyCjWmgXVvkn+nFhVgw=

//echo "datos desencriptados: ".openssl_decrypt($parametro_encriptado, "aes128","claper",0,"tacktacktacktack")."<br>";

//echo "encode : ". urlencode("bar=2&mesa=4");
*/
?>


<?php

if(isset($_POST['submit']))

{

$mesa = $_POST['mesa'];
$bar = $_POST['bar'];

$url="mesa=".$mesa."&bar=".$bar;
echo "url: '".$url."'<br>";
$parametro_encriptado = openssl_encrypt($url, "aes128","claper",0,"tacktacktacktack");
$url = openssl_encrypt($url, "aes128","claper",0,"tacktacktacktack");
//urlencode(utf8_encode($url));
$resultado = "http://www.tack.uy/tackintosh/inicio.php?d=".urlencode(utf8_encode($url));

echo "<a href=".$resultado.">".$resultado."</a><br>";
echo $resultado;

}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

bar: <input type="text" name="bar"><br>
mesa: <input type="text" name="mesa"><br>
<input type="submit" name="submit" value="Submit Form"><br>

</form>
