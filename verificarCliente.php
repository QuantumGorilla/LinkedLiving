<?php
session_start();
include "conexion.php";
$re=mysqli_query($obj_conexion,"select * from cliente where usuario='".$_POST['Usuario']."' AND 
 					contrasena='".$_POST['Password']."'")	or die(mysqli_error($obj_conexion));
	while ($f=mysqli_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['nombre']);
	}
	if(isset($arreglo)){
		$_SESSION['usuario']=$arreglo;
		header("Location: home.php");
	}else{
		$re=mysqli_query($obj_conexion,"select * from usuarios where Usuario='".$_POST['Usuario']."' AND 
 					Password='".$_POST['Password']."'")	or die(mysqli_error($obj_conexion));
		while ($f=mysqli_fetch_array($re)) {
			$arreglo[]=array('Nombre'=>$f['Nombre'],
				'Apellido'=>$f['Apellido'],'Imagen'=>$f['Imagen']);
		}
		if(isset($arreglo)){
			$_SESSION['Usuario']=$arreglo;
			header("Location: admin.php");
		}else{
			$re=mysqli_query($obj_conexion,"select * from despachadores where usuario='".$_POST['Usuario']."' AND 
	 					contrasena='".$_POST['Password']."'")	or die(mysqli_error($obj_conexion));
			while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('Nombre'=>$f['nombred'],'CantPedidos'=>$f['cantPedidos']);
			}
			if(isset($arreglo)){
				$_SESSION['userdes']=$arreglo;
				header("Location: despachador.php");
			}else{
				header("Location: index.php?error=datos no validos");
			}
		}
	}
?>