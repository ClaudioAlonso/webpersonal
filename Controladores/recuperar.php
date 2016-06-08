<?php
	require_once('rutas.php');
	require (PATH_MODELS.'Config.php');
	require (PATH_MODELS.'Database.php');
	include ('validaciones.php');
	$mensaje="";
	$db = new Database();
	$db->conectar();
	$validaciones = new Validaciones();
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if($db->verifyByEmail($_POST['email'])==TRUE)
		{
			$resultado = $db->getPassword($_POST['email']);
			$row = array();
	        $row = $resultado->fetch_assoc();
	        $password = $row['password'];
	        $para      = $_POST['email'];
			$titulo    = 'Password Recovery from claudio.site88.net';
			$mensaje   = 'La contraseña registrada es: '.$password;
			$cabeceras = 'From: claudio.site88.net';
			//Es necesario contar con un servidor SMTP para usar la función mail
			mail($para, $titulo, $mensaje, $cabeceras);
			$mensaje= $validaciones->getMessage('La contraseña se ha enviado al correo electrónico ingresado.');
			header("Refresh:2;URL=principal.php");		
 	 	}
		else
		{
			$mensaje = $validaciones->getError('Correo no registrado en el sistema.');
		}
	}
	$db->closeCon();
	include (PATH.'recuperar.php');
?>