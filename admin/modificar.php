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
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="./modificar.js"></script>
</head>
<body>
	<header>
			<a id="inicio" href="../">Inicio</a>
			<a id="ultimas" href="../admin.php">Ultimas Compras</a>
			<a id="agregar" href="./agregarproducto.php" >Agregar</a>
			<a id="cerrar" href="../login/cerrar.php">Salir</a>
	</header>
	<section>
		<center><h1 id="titulo">MODIFICAR Y/O ELIMINAR</h1></center>
		<table width="100%">
			<tr id="titles">
				<td>Id</td>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Categoria</td>
				<td>Precio</td>
				<td>Eliminar</td>
				<td>Modificar</td>
			</tr>
		<?php 
			$resultado=mysqli_query($obj_conexion,"select * from productos");
			while($row=mysqli_fetch_array($resultado)){
				echo '
				<tr id="opc">
					<td><input type="hidden" value="'.$row[0].'">'.$row[0].'</td>
					<td><input type="text" id="txt" class="nombre" value="'.$row[1].'"></td>
					<td><input type="text" id="txt" class="descripcion" value="'.$row[3].'"></td>
					<td><select class="categoria" name="categoria">
						<option>'.$row[2].'</option>
						<option>Comida</option>	 	
	 			 		<option>Deportes</option>
	 			 		<option>Hogar</option>
						<option>Juguetes</option>
	 			 		<option>Ropa</option>
	 			 		<option>Tecnologia</option>
	 			 		</select></td>
					<td><input type="text" id="txt" class="precio" value="'.$row[5].'"></td>
					<td><button class="eliminar" id="btn" data-id="'.$row[0].'">Eliminar</button></td>
					<td><button class="modificar" id="btn" data-id="'.$row[0].'">Modificar</button></td>
				</tr>
				';
			}
		?>
	</table>
	</section>
</body>
</html>