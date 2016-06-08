<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Registro de usuario</title>
<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="recursos/css/estilos.css">
</head>
<body class="full">
	<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="principal.php" class="navbar-brand">Registro en mi web personal</a>
				</div>
				<div class="navbar-form navbar-right">
					<div class="form-group">
						<a href="principal.php" class="btn btn-primary">Volver</a>
					</div>
				</div>
			</div>
		</nav>
	<div class="container">
			<div class="col-md-6 col-md-offset-3">
				<div class="jumbotron">
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
						<div class="form-group">
						<label>Nombre <span class="requerido">*</span>:</label>
						<input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php 
						echo $arreglo['valor_nombre'];?>">
						</div>
							<?php echo $arreglo['error_nombre'];?>
						<div class="form-group">
						<label>Email <span class="requerido">*</span>:</label>
						<input type="text" class="form-control" placeholder="Correo electrónico" name="email" value="<?php echo $arreglo['valor_email'];?>">			
						</div>
							<?php echo $arreglo['error_email'];?>
						<div class="form-group">
						<label>Contraseña <span class="requerido">*</span>:</label>
						<input type="password" class="form-control" placeholder="Contraseña" name="password" value="<?php 
						echo $arreglo['valor_password'];?>">
						</div>
							<?php echo $arreglo['error_password'];?>
						<div class="form-group">
						<label>Género <span class="requerido">*</span>:</label>
						</div>
						<div class="radio">
			  			<label><input type="radio" name="opradio" value="masculino" 
			  			<?php if(isset($arreglo['valor_genero']) && $arreglo['valor_genero']=="masculino") echo "checked";?>>Masculino</label>
			  			<label><input type="radio" name="opradio" value="femenino" 
			  			<?php if(isset($arreglo['valor_genero']) && $arreglo['valor_genero']=="femenino") echo "checked";?>>Femenino</label>
						</div>
							<?php echo $arreglo['error_genero'];?>
						<br/><br/>	
						<div class="form-group" align="center">
						<input type="submit" value="Registrarse" class="btn btn-success">
						</div>
						<div class="form-group">
						<?php echo $mensaje;?>
						</div>	
					</form>
				</div>
			</div>
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom">
  		<div class="container">
  			<div class="navbar-form navbar-left">
				<p><span class="requerido">*</span> Campos obligatorios.</p>
			</div>
  		</div>
	</nav>
<script type="text/javascript" src="recursos/js/jquery.js"></script>
<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>
</body>
</html>