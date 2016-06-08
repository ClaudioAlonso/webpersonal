<?php
	session_start();
	require_once('rutas.php');
	if(isset($_SESSION['user'])){
	include (PATH.'menu.php');
	}
	else{
		header("Location: errores.php?error=session");
	}
?>