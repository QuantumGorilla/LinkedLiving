<!DOCTYPE html>
<html lang="es">
<head>
	<title>LinkedLiving</title>
	<link rel="stylesheet" a href="css\Login.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
    <form id="formulario" method="post" action="./registro/registro.php">
			<input type="submit" id="registro" value="REGISTRARSE" class="registrarse">
		</form>
	<div class="container">
	<img src="imagenes/Avatar.png"/>
		<form id="formulario" method="post" action="verificarCliente.php">
		<div class="form-input">
		<input type="text" name="text" placeholder="Nombre de usuario"/>	
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="Contraseña"/>
		</div>
		<input type="submit" type="submit" value="Entrar" class="btn-login"/>
            <?php 
					if(isset($_GET['error'])){
						echo '<br><br><span id="error">¡LOS DATOS INGRESADOS SON INCORRECTOS!</span>';
						
					}
				?>
		</form>
	</div>
</body>
</html>