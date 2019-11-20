<?php
	include ("conexion.php");
	$universidad=$_POST['universidad'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$celular=$_POST['celular'];
	$email=$_POST['e-mail'];
	if (strlen($universidad)*strlen($nombre)*strlen($apellido)*strlen($celular)*strlen($email)) {
		$Sql="insert into estudiantes (universidad,nombre,usuario,celular, email) values(
			'$universidad',
			'$nombre',
			'$apellido',
			'$celular',
			'$email')";
		mysqli_query($obj_conexion,$Sql);
		header ("Location: logines.php");
		echo "Registrado correctamente";
	}else{
		header ("Location: registro.php");
		echo "Llene todos los campos primero...";
	}			
?>