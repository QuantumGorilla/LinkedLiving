<?php
session_start();
include "../conexion.php";
	$arreglo=$_SESSION['carrito'];
	$numeroventa=0;
	$esta="'En proceso'";
	$arreglo2=$_SESSION['usuario'];
	$re1=mysqli_query($obj_conexion,"select * from despachadores order by cantPedidos limit 1") or die(mysqli_error($obj_conexion));
	while( $g=mysqli_fetch_array($re1) ){
		$arreglo3[]=array('nombre'=>$g['nombred'],'cant'=>$g['cantPedidos'],'iddes'=>$g['id']);
		$cant=$g['cantPedidos'];
		$iddes=$g['id'];
	}
	$cant=$cant +1;
	mysqli_query($obj_conexion,"update despachadores set cantPedidos='".$cant."' where id=".$iddes);
	$re=mysqli_query($obj_conexion,"select * from compras order by numeroventa DESC limit 1") or die(mysqli_error($obj_conexion));

	while( $f=mysqli_fetch_array($re) ){
		$numeroventa=$f['numeroventa'];
	}
	
	if ($numeroventa==0) {
		$numeroventa=1;
	}else{
		$numeroventa=$numeroventa+1;
	}
	for ($i=0; $i <count($arreglo) ; $i++) { 
		mysqli_query($obj_conexion,"insert into compras (Cliente, numeroventa, imagen, nombre, precio, cantidad, subtotal, despachador, estado) values(
			'".$arreglo2[0]['Nombre']."',
			".$numeroventa.",
			'".$arreglo[$i]['Imagen']."',
			'".$arreglo[$i]['Nombre']."',
			'".$arreglo[$i]['Precio']."',
			'".$arreglo[$i]['Cantidad']."',
			'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."',
			'".$arreglo3[0]['nombre']."',
			".$esta."
			) ")or die(mysqli_error($obj_conexion));
	}
	unset($_SESSION['carrito']);
	header("Location: ../home.php");
?>