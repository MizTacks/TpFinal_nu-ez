<?php
	include("connect.php");
	$user = $_POST['usuario'];
	$password = $_POST['password'];

	
	
	if ($query = $conexion->prepare("select count(*) as existe from usuarios where usuario = ?")) {
		$query->bind_param("s", $user);
		$query->execute();
		$query->bind_result($existe);
		$query->fetch();
		$query->close();
		
		if ($existe == 0) {
			
			if ($query2 = $conexion->prepare("select max(ID)+1 as maxid from usuarios")) {
		     $query2->execute();
		     $query2->bind_result($maxid);
		     $query2->fetch();
		     $query2->close();}
	
	       if ($query3 = $conexion->prepare("insert into usuarios values($maxid,?,?)")) {
		    $query3->bind_param("ss", $user, $password);
		    $query3->execute();
		    $query3->fetch();
		    $query3->close();}
			
			
			echo ("OK");
			
		} else


			echo ("NO");
		
	}
	
	
?>