<!DOCTYPE html>
<html>
<head>
	<title>LinkedLiving</title>
	<link rel="stylesheet" a href="css\Login.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<div class="container">
	<img src="imagenes/Avatar.png"/>
		<form>
		<div class="form-input">
		<input type="text" name="text" placeholder="Nombre de usuario"/>	
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="Contraseña"/>
		</div>
		<input type="submit" type="submit" value="Entrar" class="btn-login"/>
        <?php
            if(isset($_GET['error'])){
                echo '<br><br><span id="error">Nombre de usuario y/o contraseña incorrectos.</span>';
            }
        ?>
		</form>
	</div>
</body>
</html>

