<?php
	$server = "localhost";
	$db_user = "root";
	$db_password = "";
	$db = "DBPuzzles";
	$port = "3306";
	$conexion = mysqli_connect($server, $db_user, $db_password, $db, $port);

	mysqli_set_charset($conexion, "utf8");	
?>