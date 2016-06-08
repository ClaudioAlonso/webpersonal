<?php
	session_start();
	session_unset();
	require_once('rutas.php');
	require (PATH_MODELS.'Config.php');
	require (PATH_MODELS.'Database.php');
	require ('validaciones.php');
	//CREAR LA TABLA EN LA BASE DE DATOS SI NO EXISTE

	$db = new Database();
	$conexion = $db->conectar();
	$tabla = $db->createTable();
		if($tabla==FALSE)
		{
			echo "Error al crear la tabla en la base de datos!";
		}
	$validaciones = new Validaciones();
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$validaciones->validarEmail($_POST['user_email']);
		if($validaciones->getFlag()==TRUE)
		{
			if($db->verifyByEmail($_POST['user_email']) == TRUE)
			{
				if($db->verifyPassword($_POST['user_email'], $_POST['user_password']) == TRUE)
				{
						$_SESSION['user'] = $_POST['user_email'];
						header("Location: menu.php");
				}
				else
				{
					header("Location: errores.php?error=password");
				}
			}
			else
			{
				header("Location: errores.php?error=email");
			}
		}
		else
		{
			header("Location: errores.php?error=format");
		}
	}
	$db->closeCon();	
	include (PATH.'principal.php');
?>