<?php
	include("connect.php");

$sql = "SELECT * FROM cubos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["ID"]. " - Name: " . $row["usuario"]. " " . $row["contraseña"]. "<br>";
		
		pintar($row["Nombre"], $row["Marca"], $row["Precio"], $row["Descripcion"], $row["img"]);
    
} }
else{
    echo "Sin Resultados uwu";
}
$conexion->close();
?>
