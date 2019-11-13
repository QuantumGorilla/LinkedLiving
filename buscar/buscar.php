<?php
session_start();
if(isset($_SESSION['usuario'])){

}else{
	header("Location: ./index.php?Error=Acceso denegado");
}
?>
<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Comta</title>
		<link rel="stylesheet" type="text/css" href="./css/estilos.css">
		<script type="text/javascript"  href="./js/scripts.js"></script>
	</head>
	<body>
		<form method="POST" action="buscar.php" >
		<header>
			<h1>Comta</h1>
			<a href="./carritodecompras.php" title="ver carrito de compras">
				<img src="./imagenes/carrito.png">
			</a>
			<a href="./login.php" title="Acceso admin">
				<img src="./imagenes/login.png">
			</a>
			<a href="cerrarCliente.php" title="Cerrar Sesion">
				<img src="./imagenes/sign-out-option.png">
			</a>
			<form action="index.php">
			<div>
				<select class='form-control' name='Categoria'>
					<option></option>		 	
 			 		<option>Tecnologia</option>
  					<option>Deportes</option>
  					<option>Juguetes</option>
  					<option>Ropa</option>
  				<option>hogar</option>
				</select>
			</div>
			</form>
			<div>
				
			</div>

			
		</header>
		</form>
		<section>

		<?php
		echo " 	
				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>

				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>

				<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>



				";

			$categoria =  $_POST['Categoria'];
			$arreglo2=$_SESSION['usuario'];
			$cliente=$arreglo2[0]['Nombre'];
			echo "
			<p class='lead'>Bienvenido $cliente <br /></p>";

			include 'conexion.php';
			$re=mysqli_query($obj_conexion,"SELECT * from productos WHERE Categoria = 'categoria'")or die(mysqli_error($obj_conexion));
			while ($f=mysqli_fetch_array($re)) {
			?>
				<div class="producto">
				<center>
					<img src="./productos/<?php echo $f['imagen'];?>"><br>
					<span><?php echo $f['nombre'];?></span><br>
					<a href="./detalles.php?id=<?php echo $f['id'];?>">ver</a>
				</center>
			</div>
		<?php
			}	
		?>
		</section>
	</body>
	</html>
