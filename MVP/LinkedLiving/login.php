<!DOCTYPE html>
<html>
<head>
	<title>LinkedLiving</title>
	<link rel="stylesheet" a href="css\Login.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<section>
	<form action="principal.php" method="post" >
        <input type="submit" type="submit" value="REGRESAR"/>
    </form>
	<div class="container">
		<img src="imagenes/Avatar.png"/>
		<h2 style="color:white">Arrendatario</h2>
		<form>
			<div class="form-input">
				<input type="text" name="text" placeholder="Usuario"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Contraseña"/>
			</div>
		</form>
		<form id="botones" method="post" action="./firstpage.php">
			<input type="submit" type="submit" value="ENTRAR"/> 
		</form>
		<br></br>
        <form id="formulario" method="post" action="./registrarsea.php">
			<input type="submit" id="registro" value="REGISTRARSE" class="registrarse">
		</form>
       <?php
        if(isset($_GET['error'])){
            echo '<br><br><span id="error">Nombre de usuario y/o contraseña incorrectos.</span>';
        }
        ?>
	</div>
	</section>
</body>
</html>

