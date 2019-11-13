<?php
include "conexion.php";
mysqli_query($obj_conexion,"update compras set estado='Listo' where numeroventa=".$_REQUEST['id']);
$cant=$_REQUEST['cantidad']-1;
mysqli_query($obj_conexion,"update despachadores set cantPedidos='".$cant."'' where nombred=".$_REQUEST['nombre']);
header("Location: ./despachador.php");
?>
