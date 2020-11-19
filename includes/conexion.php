<?php

//Conectar a la base de datos
$servidor = "localhost";
$usuario="root";
$password="";
$basededatos="blog_master";

$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db,"SET NAMES 'utf8'");
 //Inicio sesion

 session_start();


?>