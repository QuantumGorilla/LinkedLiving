<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "linkedliving";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "usuarios"; 	   // tabla de usuarios
	$tabla_db2 = "arrendatarios";  // tabla de arrendatarios
	$tabla_db3 = "estudiantes";    // tabla de estudiantes

	error_reporting(1); //No me muestra errores
	
	$conexion = mysqli_connect($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos...";
	    exit();
	}

?>