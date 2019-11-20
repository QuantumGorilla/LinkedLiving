<?php
session_start();
	include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
	<style>
    body {
      background-color: #E0F8F7;
    }
    label {
      font-family: "Arial";
      font-size: 30px;
      text-shadow: -2px 2px lightgray;
    }
    center { 
      background-color: white;
      padding: 55px 60px 55px 60px;
      margin: 0px 350px 20px 350px;
      border: 1px solid #DDD;
      border-radius: 15px;
      box-shadow: -3px 1px 3px 1px rgba(0,0,0,0.24);
    }
    #botones {
      display: inline-block;
      padding: 10px 35px;
      font-size: 12px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #FFF;
      background-color:#08088A;
      border-radius: 15px;
    }
    #titulo { 
      font-size: 50px;
      text-shadow: -2px 2px lightgray;
    }
    #botones:hover {
      background-color: #0101DF;
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 10px 30px 0 rgba(0,0,0,0.19);
    }
    botones:active {
      background-color: #0B0B61;
    }
    #nombre {
      font-family: "Times New Roman", Times, serif;
      font-size: 15px;
      padding-top: 15px;
      border-left: none;
      border-right: none;
      border-top: none;
      border-bottom: 1px solid #DDD;
      width: 400px;
    }

    #usuario {
      font-family: "Times New Roman", Times, serif;
      font-size: 15px;
      padding-top: 15px;
      border-left: none;
      border-right: none;
      border-top: none;
      border-bottom: 1px solid #DDD;
      width: 400px;
    }
    #contrasena{
      font-family: "Times New Roman", Times, serif;
      font-size: 15px;
      padding-top: 15px;
      border-left: none;
      border-right: none;
      border-top: none;
      border-bottom: 1px solid #DDD;
      width: 400px;
    }
    #apellido{
      font-family: "Times New Roman", Times, serif;
      font-size: 15px;
      padding-top: 15px;
      border-left: none;
      border-right: none;
      border-top: none;
      border-bottom: 1px solid #DDD;
      width: 400px;
    }
    #celular{
      font-family: "Times New Roman", Times, serif;
      font-size: 15px;
      padding-top: 15px;
      border-left: none;
      border-right: none;
      border-top: none;
      border-bottom: 1px solid #DDD;
      width: 400px;
    }
    #e-mail{
      font-family: "Times New Roman", Times, serif;
      font-size: 15px;
      padding-top: 15px;
      border-left: none;
      border-right: none;
      border-top: none;
      border-bottom: 1px solid #DDD;
      width: 400px;
    }
  </style>
</head>
<body>
  <form action="login.php" method = "post">
      <input type="submit" type="submit" value="REGRESAR"/>
	</form>
     <section>
	   <center><form action="guardabaseUsuario.php" method = "post"><form action="guardaArrendatario.php" method = "post">
	   <label id="titulo">REGISTRO</label><br><br>
     <label for="usuario">Nombre de usuario: </label><br>
     <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Escriba su nombre de usuario"><br><br><br>
     <label for="contrasena">Contraseña: </label><br>
     <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Escriba su contraseña"><br><br><br><br>
     <label for="nombre">Nombre: </label><br>
     <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escriba su nombre"><br><br><br>
     <label for="apellido">Apellido: </label><br>
     <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Escriba su primer apellido"><br><br><br>
     <label for="celular">Celular: </label><br>
     <input type="text" name="celular" class="form-control" id="celular" placeholder="Escriba su celular"><br><br><br>
     <label for="e-mail">E-mail: </label><br>
     <input type="text" name="e-mail" class="form-control" id="e-mail" placeholder="Escriba su e-mail"><br><br><br>
     <input type="submit" name="accion" value="ENVIAR" class="aceptar"><br>
     <p> Si desea inscribir una institución de educación superior, contacte con soporte. <br> Tel: 3506995 </p>
	</form>	</center>
	</section>
    <?
         if(isset($_POST['btn1']))
  	{
  		include("abrir_conexion.php");

  		
  		$nombre=$_POST['nombre'];
  		$apellidos=$_POST['apellido'];
  		$celular=$_POST['celular'];
      $email=$_POST['e-mail'];
      if (strlen($nombre)*strlen($apellido)*strlen($celular)*strlen($email)) {

        mysqli_query($conexion,"INSERT INTO $tabla_db2 (id,nombre,apellidos,celular,email) values ('','$nombre','$apellido','$celular', '$email')");

        include("cerrar_conexion.php");
        echo "ya agrego"; 
        header('Location:../index.php');     
      }else{
        echo "Llene todo los campos"; 
      }
  	}
  ?>
</body>
</html>