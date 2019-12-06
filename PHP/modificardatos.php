<?php

	include("connect.php");
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$marca = $_POST['marca'];
	$precio = $_POST['precio'];
	$descripcion = $_POST['descripcion'];
	$img = $_POST['img'];
	mysqli_query($conexion, "UPDATE cubos SET Nombre='$nombre', Marca='$marca', Precio='$precio', Descripcion='$descripcion', img='$img' where id='$id'");
	echo ("OK");
	
?>