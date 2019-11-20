<?php
session_start();
  include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Registro</title>
  <meta charset="utf-8">
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
  </style>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="row">
  <div class="col-md-4">
    <form action="../login.php">
      <input type="submit" id="botones" value="REGRESAR" class="btn btn-success" name="btn1">
    </form>
    <center>
    	<label id="titulo">REGISTRO</label><br><br>
      <form action="guardaArrendatario.php" method = "post">
      <label for="nombre">Nombres: </label><br>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escriba su nombre"><br><br><br>
      <label for="usuario">Nombre de usuario: </label><br>
      <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Escriba su nombre de usuario"><br><br><br>
      <label for="contrasena">Contraseña: </label><br>
      <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Escriba su contraseña"><br><br><br><br>
      <input type="submit" name="accion" value="ENVIAR" class="aceptar"><br>
      <p> Si desea inscribir una institución de educación superior, contacte con soporte. <br> Tel: 3506995 </p>
      </form>
    </center>
      <?php
  	if(isset($_POST['btn1']))
  	{
  		include("abrir_conexion.php");

  		
  		$nombre=$_POST['nombre'];
  		$apellido=$_POST['apellido'];
  		$celular=$_POST['celular'];
      $email=$_POST['e-mail'];
      if (strlen($nombre)*strlen($apellido)*strlen($celular)*strlen($email)) {

        mysqli_query($conexion,"INSERT INTO $tabla_db2 (id,nombre,apellido,celular,email) values ('','$nombre','$usuario','$contrasena')");

        include("cerrar_conexion.php");
        echo "ya agrego"; 
        header('Location:../index.php');     
      }else{
        echo "Llene todo los campos"; 
      }
  	}
  ?>
  </div>
  <div class="col-md-4"></div>
</div>
</body>
</html>