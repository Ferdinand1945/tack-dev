<!DOCTYPE html>

<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Content-Type: text/html;charset=utf-8");
?>

<html>

<head>
<meta http-equiv="Expires" content="0">

<meta http-equiv="Last-Modified" content="0">

<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

<meta http-equiv="Pragma" content="no-cache">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Tack!</title>

<!-- jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- BOOTSTRAP minified CSS
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="bootstrap-3.3.6/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">  -->
<!-- BOOTSTRAP: Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- jQuery / AJAX script principal <script type="text/javascript" src="js/claper.js"></script>-->
<script type="text/javascript" src="js/mainJSscript.js"></script>

<script type="text/javascript" src="js/claper.js"></script>

    <!-- CSS principal -->
<link href="style/style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<?php
/* La session la empiezo en el header para no tener que empezar session en cada uno de los modulos, re al pedo sino no y me come prestandar... aunque alguno que otro va a tener que empezar, veremos dijo un ciego*/
if(session_status()==PHP_SESSION_NONE){session_start();}
/* Require / request database */
require_once("database.php");
?>
