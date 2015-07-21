<?php 
$host = "soheilskyssoheil.mysql.db";
$username = "soheilskyssoheil";
$password = "shMMrUhzgGhx";
$name = "soheilskyssoheil";

$connect = mysqli_connect($host, $username, $password, $name) or die ("Connexion Impossible");

mysqli_set_charset("utf8");

header( 'content-type: text/html; charset=utf-8' );

?>