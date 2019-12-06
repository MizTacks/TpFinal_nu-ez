

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
	<h1>  AlienMind </h1>
	
	
	</nav>
	</div> 

	<ul>
	
  <li><a href="panelInicio.php"> Volver al panel </a></li> 
	
	</ul>
	
	<div  class ="cuerpo">

      <nav  class ="editor">
			<h1>Ingresar</h1>

			<form onsubmit="return insertarProducto();" method="post">
            <p>Nombre: <input type="text2" placeholder="Nombre del rompecabezas" id="nombre" required>
            <p>Marca : <input type="text2" placeholder="Marca del rompecabezas" id="marca" required>
            <p>Precio : <input type="text2" placeholder="Valor del rompecabezas" id="precio" required>
            <p>Descripcion : <input type="text2" placeholder="Descripcion del rompecabezas" id="descripcion">
            <p>img : <input type="text2" placeholder="Link de la Imagen" value="https://www.culturaqroo.com/images/noimage.png" id="img">
            <p><input type="submit" value="Insertar">
            </form>



</nav>

</div>

<div class ="exy">
</div>

 <script>
    function insertarProducto(){
      let nombre = $("#nombre").val();
      let marca = $("#marca").val();
      let precio = $("#precio").val();
      let descripcion = $("#descripcion").val();
      let img = $("#img").val();
      
      let parametros = {
        "nombre": nombre,
        "marca": marca,
        "precio": precio,
        "descripcion": descripcion,
        "img": img
		
      };

      $.ajax({
        url : "../PHP/insertarProductos.php",
        type: "post",
        data: parametros,
        success: function (retorno){
          if(retorno != "OK"){
            alert("Producto Ingresado");
            location.href = "panelInicio.php";
          }
          else{
            alert("El producto no pudo ingresarse");
          }
        }
      });

      return false;
    }
  </script>

  </body>
</html>

