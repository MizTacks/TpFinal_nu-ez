
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    if(!isset($_SESSION["logueado"]) || $_SESSION["logueado"] !== true){
        header("location: index.php");
    }
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title> AlienMind </title>
    <link rel="stylesheet" href="css/style.css">
    
  </head>

  <body>
	
	
	<div class ="top"> 

	<h1>  AlienMind </h1>
	
	
	</div> 

	<ul>
	
  <li><a href="panel/panelInicio.php">Panel de Control</a></li>
  <li><a href="PHP/mostrarAPI.php" target="blank">La API</a></li>
  <li><a href="PHP/cerrarSesion.php"> Cerrar Sesion </a></li>

	
	
</ul>
	<div  class ="cuerpo">





		<main id="contenedor">

			<h1>Puzzles</h1>
			<section id="Cubos">
			
			<?php

	include("PHP/connect.php");
$sql = "SELECT * FROM cubos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo"<article class='cubitos'><div class='imagen'><img src='". $row["img"]."' width='100%'></div><div class='detalle'><h2>". $row["Nombre"]."</h2><h3>". $row["Marca"]."</h3> <h3> Precio:". $row["Precio"]."</h3> <p>". $row["Descripcion"]."</p> </div> </article>";

    }
    }
	
$conexion->close();
 ?>


			
			</section>


		</main>

		<script src="js/script.js"></script>
		<script src="js/mostrar.js"></script>




</div>

<div class ="exy">


</div> 


  </body>
</html>