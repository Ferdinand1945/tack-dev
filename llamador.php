<?php

/*
$_SESSION['mesa']=$mesa;
$_SESSION['bar']=$bar;
$_SESSION['token']=$_GET['d'];
*/
include_once("database.php");

if(session_status()==PHP_SESSION_NONE){session_start();}
//session_start();
//echo $_SESSION['mesa'];
//echo $_SESSION['token'];
if ((!isset ($_SESSION['bar'])) || (!isset ($_SESSION['mesa']))){
//die ("error con la sesion al llamar al mozo");
    die ("<img src=images/error.png>");
} 
$tipo ='0';
switch ($_POST['tipo']){
    case 'M':
        $tipo = 'M';
        break;
    case 'C':
        $tipo = 'C';
        break;
}


        
//$var = urldecode(strtr($_GET['d'],"'",'%'));
//echo "antes de la DB: '<br>";
$database->pedirMozo ($_SESSION['mesa'],$_SESSION['bar'], $tipo);
//echo "luego de desencodear queda: '<br>";
//$respuesta = openssl_decrypt($_GET['d'], 'aes128','claper',0,'tacktacktacktack');

$res = "<div> <center>";
switch ($_POST['tipo']){
    case 'M':
        $res .= "Un mozo se presentará en su mesa apenas esté disponible";
        break;
    case 'C':
        $res .= "Estamos preparando su cuenta, ya se la enviamos a su mesa";
        break;
}

$res .= "</center></div>";
exit ($res);
return (0);
/*
parse_str($respuesta);

$_SESSION['mesa']=$mesa;
$_SESSION['bar']=$bar;
$_SESSION['token']=$_GET['d'];
*/

?>