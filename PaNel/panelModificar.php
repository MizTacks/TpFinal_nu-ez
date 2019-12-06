

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    if(!isset($_SESSION["logueado"]) || $_SESSION["logueado"] !== true){
        header("location: ../index.php");
    }
?>


<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title> AlienMind </title>
    <link rel="stylesheet" href="../css/style.css">
    
  </head>

  <body >
	
	<div class ="top"> 
	<nav>
	<h1> AlienMind</h1>
	
	
	</nav>
	</div> 

	<ul><li><a href="panelInicio.php"> Volver al panel </a></li></ul>
	
	<div  class ="cuerpo">
	<div  class ="editor">


			<h1>Modificar</h1>


			<form action="../PHP/modificarProductos.php" method="post" >
            <p>ID : <input type="text2" name="ID" readonly="readonly" value="deah"/>
            <p>Nombre: <input type="text2" name="nombre" />
            <p>Marca : <input type="text2" name="marca" />
            <p>Precio : <input type="text2" name="precio" />
            <p>Descripcion : <input type="text2" name="descripcion" />
            <p>img : <input type="text2" name="img" />
            <p><input type="submit" value="Insertar"  />
            </form>



</div>
</div>

<div class ="exy">



</div> 

  </body>
</html>






