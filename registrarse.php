<?php
session_start();
	include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body>
	<header>
	</header>
	<section>
	<nav class="menu2">
	  <menu>
	    <li><a href="index.php">Inicio</a></li>
	  </menu>
	</nav>
	<center><h1>Registro de Nuevo Usuario</h1></center>
	<form action="guardabasecliente.php" method = "post"">
		<fieldset>
			Nombre<br>
			<input type="text" name="nombre">
		</fieldset>
		<fieldset>
			Usuario<br>
			<input type="text" name="usuario">
		</fieldset>
		<fieldset>
			Contreseña<br>
			<input type="password" name="contresena">
		</fieldset>
		<input type="submit" name="accion" value="Enviar" class="aceptar">
	</form>	
	</section>
</body>
</html>