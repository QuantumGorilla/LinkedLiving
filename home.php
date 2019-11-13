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
		<title>Linked Living</title>
		<link rel="stylesheet" type="text/css" href="./css/estilos.css">
		<script type="text/javascript"  href="./js/scripts.js"></script>
	</head>
	<body onload="getTime()" style="background-color: #FFFFFF;">
		<header>
			<a href="./carritodecompras.php" title="ver carrito de compras">
				<img src="./imagenes/carrito.png">
			</a>
			<a href="./login.php" title="Acceso admin">
				<img src="./imagenes/login.png">
			</a>
			<a href="cerrarCliente.php" title="Cerrar Sesion">
				<img src="./imagenes/sign-out-option.png">
			</a> 
			<a href="pedidosCliente.php" title="Ver Pedidos">
				<img src="./imagenes/order.png">
			</a>                                                                 <span id="time"></span>
		<span>                                                                    </span>
		<span>                                                                      <span id="marca">MAKEMI Shop®</span></span>
		</header>
		<section>

		<?php
			$arreglo2=$_SESSION['usuario'];
			$cliente=$arreglo2[0]['Nombre'];
			echo "
			<p class='lead'>¡Bienvenido $cliente!<br></p>";

			echo "
				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>

				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>

				<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

				";
			?>


			<form id="combo" action='home.php' method = 'post'>
				<select class='form-control' id='categorias' name='categoria'>
					<option>Seleccione una opcion...</option>
					<option>Comida</option>
			 		<option>Deportes</option>
			 		<option>Hogar</option>
					<option>Juguetes</option>
			 		<option>Ropa</option>
			 		<option>Tecnologia</option>
				</select></li>
				<center><input type='submit' name='accion' id='aceptar' value='FILTRAR' class='aceptar'></center>
			</form>
			<br>
			<?php
			include 'conexion.php';
			if (isset($_POST['categoria'])) {
				$re=mysqli_query($obj_conexion,"select * from productos where Categoria='".$_POST['categoria']."'")or die(mysqli_error($obj_conexion));
				while ($f=mysqli_fetch_array($re)) {
				?>
					<div class="producto">
					<center>
						<br>
						<img src="./productos/<?php echo $f['imagen'];?>"><br>
						<span id="prod"><?php echo $f['nombre'];?></span><br>
						<a href="./detalles.php?id=<?php echo $f['id'];?>">DETALLES</a>
					</center>
				</div>


		<?php
				}
			}else{
				$re=mysqli_query($obj_conexion,"select * from productos")or die(mysqli_error($obj_conexion));
				while ($f=mysqli_fetch_array($re)) {
				?>
					<div class="producto">
					<center>
						<br>
						<img src="./productos/<?php echo $f['imagen'];?>"><br>
						<span id="prod"><?php echo $f['nombre'];?></span><br>
						<a href="./detalles.php?id=<?php echo $f['id'];?>">DETALLES</a>
					</center>
				</div>
			<?php
				}
			}

		?>
		</section>
	</body>
	<script type="text/javascript">
		function getTime(){
		var date = new Date();
		var day = date.getDate();
		var days = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
		var month = date.getMonth() + 1;
		var year = date.getFullYear();
		var hours = date.getHours();
		var minutes = date.getMinutes();
		var seconds = date.getSeconds();
		var cH = "", cM = "", cS = "";
		if (hours < 10) {
			cH = "0";
		}
		if (minutes < 10) {
			cM = "0";
		}
		if (seconds < 10) {
			cS = "0";
		}
		document.getElementById("time").innerHTML = days[date.getDay()] + " - " + day + "/" + month + "/" + year + " - " + cH + hours + ":" + cM + minutes + ":" + cS + seconds;
		setTimeout("getTime()", 1000);
		}
	</script>
</html>
