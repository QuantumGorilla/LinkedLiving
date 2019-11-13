<?php
session_start();
if (isset($_SESSION['userdes'])) {
		unset($_SESSION['userdes']);
		header("Location: index.php");
}
?>