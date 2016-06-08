<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Error</title>
<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="recursos/css/estilos.css">
</head>
<body class="full">
	<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="principal.php" class="navbar-brand">Han ocurrido los siguientes errores...</a>
				</div>
				<div class="navbar-form navbar-right">
					<div class="form-group">
						<a href="principal.php" class="btn btn-primary">Volver</a>
					</div>
				</div>
			</div>
		</nav>
	<div class="jumbotron">
		<div class="container">
		  <h1>No se pudo ingresar al sistema... :(</h1>
		  <p><?php echo $errores;?></p>
		</div>
	</div>
<script type="text/javascript" src="recursos/js/jquery.js"></script>
<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>
</body>
</html>