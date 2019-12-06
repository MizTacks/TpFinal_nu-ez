<?php
	include("connect.php");

	$nombre = $_POST['nombre'];
	$marca = $_POST['marca'];
	$precio = $_POST['precio'];
	$descripcion = $_POST['descripcion'];
	$imagen = $_POST['img'];

	
	if ($query = $conexion->prepare("select count(*) as existe from cubos where nombre = ?")) {
		$query->bind_param("s", $nombre);
		$query->execute();
		$query->bind_result($existe);
		$query->fetch();
		$query->close();
	
	
	
	if ($existe == 0) {
			
			if ($query2 = $conexion->prepare("select max(ID)+1 as maxid from cubos")) {
		     $query2->execute();
		     $query2->bind_result($maxid);
		     $query2->fetch();
		     $query2->close();}

			
			if ($query3 = $conexion->prepare("insert into cubos values ($maxid, ?, ?, ?, ?, ?)")){
		     $query3->bind_param("sssss", $nombre, $marca, $precio, $descripcion, $imagen);
		     $query3->execute();	
		     $query3->fetch();
			 $query3->close();}
		
			echo ("OK");
			
		} else echo ("NO");
	}
	
	?>
	