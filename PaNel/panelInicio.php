


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
	<h1> AlienMind </h1>
	
	
	</nav>
	</div> 

	<ul>
	
  <li><a href="../articulos.php"> Volver a Articulos </a></li>
  <li><a href="panelIngresar.php" >Ingresar</a></li>
    </ul>
	
	<div  class ="cuerpo">


			<h1>Puzzles</h1>

  <table style="width:80%" align="Center">
  <tr>
    <th>Nombre</th>
    <th>Marca</th>
    <th>Precio</th> 
    <th>Descripcion</th> 
  </tr>


<?php
	include("../PHP/connect.php");

$sql = "SELECT * FROM cubos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

		
        echo"<tr><td>" . $row["Nombre"]. "</td><td>" . $row["Marca"]. " </td><td>" . $row["Precio"]. "</td><td>" . $row["Descripcion"]. "</td><td> <input type='button' class='botonpanel' value='Modificar' onClick='modificar(" . $row["id"]. ");' > </td><td> <input type='button' class='botonpanel' value='Borrar' onClick='eliminar(" . $row["id"]. ");' /> </td></tr>";

    }
	
}
?>

      <script>
        function eliminar(id) {
            $.ajax({
                data: {'id':id},
                url: '../PHP/eliminardatos.php',
                type: "post" ,
				success: function(retorno){
          if(retorno == "OK"){
            alert("Se elimino el articulo");
			
                     location.reload();
          }
        }
            });
        }
		 </script> 
		 
		 
		 
		 
		 <script>
        function modificar(id) { 
		
		
	
		
		
	  let idX = id;
	  let nombreX = prompt("Nombre nuevo del producto?");
      let marcaX = prompt("Marca nueva del producto?");
      let precioX = prompt("Precio nuevo del producto?");
      let descripcionX = prompt("Descripcion nueva del producto?");
      let imgX =  prompt("Link nueva imagen del producto?");
      
      let parametros = {
        "id": idX,
        "nombre": nombreX,
        "marca": marcaX,
        "precio": precioX,
        "descripcion": descripcionX,
        "img": imgX
		
      };

            $.ajax({
                data: parametros,
                url: '../PHP/modificardatos.php',
                type: "post" ,
				success: function(retorno){
          if(retorno == "OK"){
            alert("Se ha modificado el producto");
			
                     location.reload();
          }
        }
            });
        }
    </script>
	
 
</table>

</div>

<div class ="exyD">



</div> 

  </body>
  

</html>


