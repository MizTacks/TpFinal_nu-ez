
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> API </title>
    
  </head>

  <body >
	
	<?php

	include("connect.php");
	
	$datos = array();

	$_datos = mysqli_query($conexion,"SELECT Nombre, Marca, Precio, Descripcion, img FROM cubos");
	
		foreach($_datos as $r){
			$datos["cubos"][] = $r;
		}
		
	
	$json_string = json_encode($datos);
		
		//$file = '../js/puzzles.js';
		
		//file_put_contents($file, $json_string);
		
		echo $json_string;
	
	
?>	
	
	
  </body>