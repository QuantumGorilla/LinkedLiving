<?php
session_start();
	include "conexion.php";
	if(isset($_SESSION['userdes'])){

	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Despachador</title>
	<link rel="stylesheet" type="text/css" href="./css/estiloAdm.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
<body>
	<header>
		<a id="inicio" href="index.php">Inicio</a>
		<a id="cerrar" href="cerrardespachador.php">Salir</a>
	</header>
	<section>

	<center><h1 id="titulo">PEDIDOS EN COLA</h1></center>
	<table border="0px" width="100%">	
		<tr id="titles">
			<td>IMAGEN</td>
			<td>NOMBRE</td>
			<td>PRECIO</td>
			<td>CLIENTE</td>
			<td>CANTIDAD</td>
			<td>SUBTOTAL</td>
			<td>ESTADO</td>
		</tr>	

		<?php
			$arreglo=$_SESSION['userdes'];
			$nombre=$arreglo[0]['Nombre'];
			$re1=mysqli_query($obj_conexion,"select * from despachadores where nombred='".$nombre."'") or die(mysqli_error($obj_conexion));
			while( $g=mysqli_fetch_array($re1) ){
				$cantidad=$g['cantPedidos'];
			}
			echo "<p class='lead'>Bienvenido $nombre, aqui estan sus pedidos pendientes<br></p>";
			$re=mysqli_query($obj_conexion,"select * from compras where despachador='".$nombre."' and estado!='Listo'");
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
						<td>'.$f['Cliente'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>
						<td><a class="actualizar"  href="ejecuta.php?id='.$f['numeroventa'].'&cantidad='.$cantidad.'&nombre='.$nombre.'">Listo</a></td>
					</tr>';
			}
		?>
	</table>
	</section>
</body>
</html>