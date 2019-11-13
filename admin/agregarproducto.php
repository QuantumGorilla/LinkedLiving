<?php
session_start();
	include "../conexion.php";
	if(isset($_SESSION['Usuario'])){

	}else{
		header("Location: ./home.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="../css/estiloAdm.css">
	<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body>
	<header>
		<a id="inicio" href="../">Inicio</a>
		<a id="ultimas" href="../admin.php">Ultimas Compras</a>
		<a id="modificar" href="./modificar.php">Modificar</a>
		<a id="cerrar" href="../login/cerrar.php">Salir</a>
	</header>
	<section>
		<br>
		<center>
			<label id="titulo">Agregar un Nuevo Producto</label><br><br><br>
			<form action="altaproducto.php" method = "post" enctype="multipart/form-data">
				<label for="nombre">Nombre del producto: </label><br>
				<input type="text" id="nombre" name="nombre" placeholder="Escriba el nombre del producto..."><br><br><br>
				<label for="categoria">Categorias</label><br><br>
				<select class='form-control' id="categorias" name='categoria'>	
						<option>Seleccione una categoria...</option>
						<option>Comida</option>	 	
						<option>Deportes</option>
	  					<option>Hogar</option>
	  					<option>Juguetes</option>
						<option>Ropa</option>
	  					<option>Tecnologia</option>
				</select><br><br><br>
				<label for="descripcion">Descripción</label><br>
				<input type="text" id="descripcion" name="descripcion" placeholder="Escriba una breve descripcion del producto..."><br><br><br>
				<label for="file">Imagen</label><br><br>
				<input type="file" id="imagen" name="file"><br><br><br>
				<label for="precio">Precio</label><br>
				<input type="text" id="precio" name="precio" placeholder="Digite el precio del producto..."><br><br><br>
				<input type="submit" name="accion" id="aceptar" value="AGREGAR" class="aceptar">
			</form>
		</center>
	</section>
</body>
</html>