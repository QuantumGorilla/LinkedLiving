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
	<title>Restaurante Online</title>
	<link rel="stylesheet" type="text/css" href="./css/estiloDetalles.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body onload="getTime()">
	<header>
		<a href="./home.php" title="Volver al catálogo de productos">
			<img src="./imagenes/left-arrow.png">
		</a>                                                                
		<span id="time"></span>	
	</header>
	<section>
		
		<?php
			include 'conexion.php';
			$re=mysqli_query($obj_conexion,"select * from productos where id=".$_GET['id'])or die(mysqli_error($obj_conexion));
			while ($f=mysqli_fetch_array($re)) {
			?>
				<center>
					<br>
					<span id="nombre"><?php echo $f['nombre'];?></span><br><br>
					<img id="img" src="./productos/<?php echo $f['imagen'];?>"><br><br>
					
					<span id="cat">CATEGORIA: <?php echo $f['Categoria'];?></span><br><br>

					<span id="desc">DESCRIPCIÓN: </span><span><?php echo $f['descripcion'];?></span><br><br>

					<span id="desc">PRECIO: </span><span><?php echo $f['precio'];?></span><br><br><br>
					<a  id="carro" href="./carritodecompras.php?id=<?php echo $f['id'];?>">Añadir al carrito</a>
				</center>
		<?php
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