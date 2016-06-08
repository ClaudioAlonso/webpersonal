<?php
	require_once('rutas.php');
	$errores = "";
	//ERRORES A MOSTRAR
	
	if(isset($_GET['error']))
	{
		if($_GET['error']=='password'){
			$errores = "¡La contraseña ingresada es incorrecta!";
		}
		elseif($_GET['error']=='format'){
			$errores = "¡El correo electrónico no se ingresó o tiene un formato inválido!";
		}
		elseif($_GET['error']=='session'){
			$errores = "¡No has iniciado sesión!";
		}
		else{
			$errores = "¡El correo ingresado no se encuentra registrado en el sistema!";
		}
	}
	include (PATH.'errores.php');
?>