<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Recuperar contraseña</title>
<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="recursos/css/estilos.css">
</head>
<body class="full">
	<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">Recupera tu contraseña.</a>
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
						<div class="form-group" align="center">
						<label>La contraseña se enviará al correo electrónico registrado.</label>
						<input type="text" class="form-control" placeholder="Correo" name="email">
						<?php echo $mensaje;?>
						</div>
						<div class="form-group" align="center">
						<button type="submit" class="btn btn-success">Recuperar</button>
						</div>
					</form>
				</div>
			</div>
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom">
  		<div class="container">
  			<div class="navbar-form navbar-left">
				<p>Aplicación hecha por <a href="#">Claudio Cifuentes Alonso (C),</a></p>
			</div>
			<div class="navbar-form navbar-right">
				<p><?php echo date('Y');?></p>
			</div>
  		</div>
	</nav>
<script type="text/javascript" src="recursos/js/jquery.js"></script>
<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>
</body>
</html>