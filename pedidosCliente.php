<?php
session_start();
	include "conexion.php";
	if(isset($_SESSION['usuario'])){

	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Pedidos</title>
	<link rel="stylesheet" type="text/css" href="./css/estiloAdm.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<a href="./home.php" title="Regresar al catálogo de productos">
			<img src="./imagenes/left-arrow.png">
		</a>  
	</header>
	<section>

	<center><h1 id="titulo">ÚLTIMAS COMPRAS</h1></center>
	<table border="0px" width="100%">	
		<tr id="titles">
			<td>IMAGEN</td>
			<td>NOMBRE</td>
			<td>PRECIO</td>
			<td>CANTIDAD</td>
			<td>SUBTOTAL</td>
			<td>DESPACHADOR</td>
			<td>ESTADO</td>
		</tr>	

		<?php
			$arreglo=$_SESSION['usuario'];
			$nombre=$arreglo[0]['Nombre'];
			$re=mysqli_query($obj_conexion,"select * from compras where Cliente='".$nombre."'");
			$numeroventa=0;
			while ($f=mysqli_fetch_array($re)) {
					if($numeroventa	!=$f['numeroventa']){
						echo '<tr><td>Compra No. '.$f['numeroventa'].' </td></tr>';
					}
					$numeroventa=$f['numeroventa'];
					echo '<tr id="opc1">
						<td><img src="./productos/'.$f['imagen'].'" width="150px" heigth="15px" /></td>
						<td>'.$f['nombre'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>
						<td>'.$f['despachador'].'</td>
						<td>'.$f['estado'].'</td>
					</tr>';
			}
		?>
	</table>
	</section>
</body>
</html>