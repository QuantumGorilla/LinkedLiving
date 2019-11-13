<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['usuario'])){
		if(isset($_SESSION['carrito'])){
			if(isset($_GET['id'])){
				$arreglo=$_SESSION['carrito'];
				$encontro=false;
				$numero=0;
				for($i=0;$i<count($arreglo);$i++){
					if($arreglo[$i]['Id']== $_GET['id'] ){
						$encontro=true;
						$numero=$i;
					}
				}
				if($encontro==true){
					$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
					$_SESSION['carrito']=$arreglo;
				}else{
					$nombre="";
					$precio=0;
					$imagen="";
					$re=mysqli_query($obj_conexion,"select * from productos where id=".$_GET['id']);
					while($f=mysqli_fetch_array($re)){
						$nombre=$f['nombre'];
						$precio=$f['precio'];
						$imagen=$f['imagen'];
					}
					$datosNuevos=array('Id'=>$_GET['id'], 'Nombre'=>$nombre, 'Precio'=>$precio, 'Imagen'=>$imagen, 'Cantidad'=>1);
					array_push($arreglo, $datosNuevos);
					$_SESSION['carrito']=$arreglo;
				}
			}	
		}else{
			if(isset($_GET['id'])){
				$nombre="";
				$precio=0;
				$imagen="";
				$re=mysqli_query($obj_conexion,"select * from productos where id=".$_GET['id']);
				while($f=mysqli_fetch_array($re)){
					$nombre=$f['nombre'];
					$precio=$f['precio'];
					$imagen=$f['imagen'];
				}
				$arreglo[]=array('Id'=>$_GET['id'], 'Nombre'=>$nombre, 'Precio'=>$precio, 'Imagen'=>$imagen, 'Cantidad'=>1);
				$_SESSION['carrito']=$arreglo;
			}
		}
	}else{
		header("Location: index.php?Error=Acceso denegado");
	}
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Makemi Shop</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body onload="getTime()">

	<header>
		   
		<a href="./home.php" title="Regresar al catálogo de productos">
			<img src="./imagenes/left-arrow.png">
		</a>                                                                 
		<span id="time"></span>
		<span>                                                                                 </span>
		<span>                                                                          <span id="marca">MAKEMI Shop®</span></span>	
	</header>

	<section>
		<?php
		$total=0;
			if(isset($_SESSION['carrito'])){
				$datos=$_SESSION['carrito'];
				for($i=0;$i<count($datos);$i++){

		?>
		<div class="productos">
			<center>
				<br>
				<img src="./productos/<?php echo $datos[$i]['Imagen'];?>"><br>
				<span><?php echo $datos[$i]['Nombre']; ?></span><br>
				<span>Precio: <?php echo $datos[$i]['Precio']; ?></span><br>
				<span>Cantidad:</span><br>
				 <input type="text" value="<?php echo $datos[$i]['Cantidad']; ?>"

				 data-precio="<?php echo $datos[$i]['Precio']; ?>"
				 data-id="<?php echo $datos[$i]['Id']; ?>"
				 class="cantidad">
				 <br>
				<span class="subtotal">Subtotal: <?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad']; ?></span><br>
				<a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
				<span></span>
			</center>

		</div>
		<?php
			$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
				}
			}else{
				echo '<center><h2>El carrito de compras esta vacio</h2></center>';
			}
			echo '<center><h2 id="total">Total: '.$total.' </h2></center>';
			
				if($total!=0){
					echo '<center><a id="comprar" href="./compras/compras.php" class="aceptar">Comprar</a></center>';
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