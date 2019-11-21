<?php
session_start();
if(isset($_SESSION['usuario'])){
	unset($_SESSION['Usuario']);
	header("Location: ../home.php");
}else{
	unset($_SESSION['Usuario']);
	header("Location: ../index.php");	
}
?>