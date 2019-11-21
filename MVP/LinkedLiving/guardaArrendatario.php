<?php
	include ("conexion.php");
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$celular=$_POST['celular'];
	$email=$_POST['e-mail'];
	if (strlen($nombre)*strlen($apellido)*strlen($celular)*strlen($email)) {
		$Sql="insert into arrendatarios (nombre,apellido,celular,email) values(
			'$nombre',
			'$apellido',
			'$celular',
			'$email')";
		mysqli_query($obj_conexion,$Sql);
		header ("Location: login.php");
		echo "Registrado correctamente";
	}else{
		header ("Location: registro.php");
		echo "Llene todos los campos primero...";
	}			
?>