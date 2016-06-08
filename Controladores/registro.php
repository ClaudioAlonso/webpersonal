<?php
	require_once('rutas.php');
	require (PATH_MODELS.'Config.php');
	require (PATH_MODELS.'Database.php');
	include ('validaciones.php');
	$mensaje = "";
	$validaciones = new Validaciones();
	$arreglo = $validaciones->getArray();
	$db = new Database();
	$db->conectar();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	$validaciones->validarNombre($_POST['nombre']);
	$validaciones->validarEmail($_POST['email']);
	$validaciones->validaPassword($_POST['password']);
	$validaciones->validaGenero();
	$arreglo = $validaciones->getArray();
		if($validaciones->getFlag() == TRUE)
		{
			if($db->verifyByEmail($_POST['email']) == TRUE)
			{
				$arreglo['error_email'] = $validaciones->getError('El correo ya está registrado en el sistema.');
			}
			else
			{
			$db->insertUser($_POST['nombre'], $_POST['email'], $_POST['password'], $_POST['opradio']);
			$mensaje = $validaciones->getMessage("Registro  de usuario realizado con éxito.");
			$db->closeCon();
			header("Refresh:2;URL=principal.php");
			}
		}
		else
		{
			$db->closeCon();
		}
	}
	include (PATH.'registro.php');
?>