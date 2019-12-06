<?php

	include("connect.php");
	$id = $_POST['id'];
	mysqli_query($conexion, "delete from cubos where id=".$id."");
	echo ("OK");
	
?>