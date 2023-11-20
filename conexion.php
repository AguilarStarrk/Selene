<?php
	$servidor = "sql300.infinityfree.com";
	$usuario = "if0_35099426";
	$password = "h4ujGBT77KH0";
	$db = "if0_35099426_selene_db";
	$conexion = new mysqli($servidor, $usuario, $password, $db);
	
	if ($conexion->connect_error){
		die("Conexion fallida: " . $conexion->connect_error);
    }

?>