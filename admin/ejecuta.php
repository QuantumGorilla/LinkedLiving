<?php 
	include "../conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysqli_query($obj_conexion,"delete from productos where Id=".$_POST['Id']);
		unlink("../productos/".$_POST['Imagen']);
		echo 'El producto se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){
		mysqli_query($obj_conexion,"update productos set Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
		mysqli_query($obj_conexion,"update productos set Categoria='".$_POST['Categoria']."' where Id=".$_POST['Id']);
		mysqli_query($obj_conexion,"update productos set Descripcion='".$_POST['Descripcion']."' where Id=".$_POST['Id']);
		mysqli_query($obj_conexion,"update productos set Precio='".$_POST['Precio']."' where Id=".$_POST['Id']);
		echo 'El producto se ha modificado';
	}
	

?>