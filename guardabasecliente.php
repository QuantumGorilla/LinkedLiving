<?php
	include ("conexion.php");
	$nombre=$_POST['nombre'];
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	if (strlen($nombre)*strlen($usuario)*strlen($contrasena)) {
		$Sql="insert into cliente (nombre,usuario,contrasena) values(
			'$nombre',
			'$usuario',
			'$contrasena')";
		mysqli_query($obj_conexion,$Sql);
		header ("Location: index.php");
		echo "Registrado correctamente";
		
	}else{
		header ("Location: registrarse.php");
		echo "Llene todos los campos primero...";
	}
	
		
	
?>