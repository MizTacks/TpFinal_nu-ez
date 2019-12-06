<?php
	include("connect.php");
	$user = $_POST['usuario'];
	$password = $_POST['password'];
	
	if ($query = $conexion->prepare("select count(*) as existe from usuarios where usuario = ? AND contraseña = ?")) {
		$query->bind_param("ss", $user, $password);
		$query->execute();
		$query->bind_result($existe);
		$query->fetch();
		$query->close();
		if ($existe == 1) {
			session_start();
			$_SESSION["usuario"] = $user;
			$_SESSION["logueado"] = true;
			
			echo ("OK");
		
		}        
	}
	else {
		echo ("INCORRECTO");		
	}
	
?>