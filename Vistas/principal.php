<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Bienvenido</title>
<link rel="stylesheet" type="text/css" href="recursos/assets/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="recursos/assets/css/docs.css">
<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap-social.css">
<link rel="stylesheet" type="text/css" href="recursos/css/estilos.css">
</head>
<body class="full">
	<header>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="https://www.youtube.com/channel/UCEtgK8xumf8oex_9eoOPwcw" target="_blank">
       				<img alt="Brand" style="max-width:40px; margin-top: -7px;" src="recursos/css/img/youtube.jpg">
      				</a>
      				<a class="navbar-brand" href="https://www.facebook.com/claudio.cifuentes2" target="_blank">
       				<img alt="Brand" style="max-width:40px; margin-top: -7px;" src="recursos/css/img/fb.png">
      				</a>
					<a href="registro.php" class="navbar-brand">Web personal de Claudio Cifuentes</a>
					<p class="navbar-text"><i>Desarrollador de software, Ing. Sistemas Computacionales</i></p>
				</div>
				<div class="navbar-form navbar-right">
						<div class="btn-group">
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Opciones <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a href="#" data-toggle="modal" data-target="#login-modal">Iniciar sesión</a></li>
						    <li><a href="recuperar.php">Recuperar contraseña</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="registro.php">Registrarse</a></li>
						  </ul>
						</div>
				</div>
			</div>
		</nav>
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
				<div class="loginmodal-container" align="center">
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<h1>Ingresa a tu cuenta</h1><br>
			  		<div class="form-group">
				  		<div class="input-group">
					  		<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="user_email" id="user_email" class="form-control" placeholder="Correo electrónico" />
						</div>
				  	</div>
				  	<div class="form-group">
				  		<div class="input-group">
					  		<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="password" name="user_password" id="user_password" class="form-control" placeholder="Contraseña" />
						</div>
						</div>
				  	<div class="form-group">
				  		<div class="input-group">
					  		<input type="submit" class="btn btn-success" value="Ingresar" />
					  	</div>
					</div>
					<div class="form-group">
						<div class="input-group">
					  		<a class="btn btn-block btn-social btn-facebook">
					  		<span class="fa fa-facebook"></span> Ingresa con Facebook
          					</a>
          					<a class="btn btn-block btn-social btn-twitter">
					  		<span class="fa fa-twitter"></span> Ingresa con Twitter
          					</a>
						</div>
				  	</div>
				</form>	
				</div>
			</div>
	 	</div>
</header>
		<div class="container">
		<br>
		<div class="col-md-12">
			<div id="carousel-1" class="carousel slide" data-ride="carousel">
				<!--indicadores-->
				<ol class="carousel-indicators">
					<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-1" data-slide-to="1"></li>
					<li data-target="#carousel-1" data-slide-to="2"></li>					
				</ol>
				<!--Contenedor-->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="#"><img src="recursos/css/img/code1.png" class="img-responsive"></a>
					</div>
					<div class="item">
						<a href="#"><img src="recursos/css/img/code2.jpg" class="img-responsive"></a>
					</div>
					<div class="item">
						<a href="#"><img src="recursos/css/img/code3.jpg" class="img-responsive"></a>
					</div>
				</div>
				<!--Controles-->
				<a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom">
  		<div class="container">
  			<div class="navbar-form navbar-left">
				<p>Aplicación hecha por <a href="#">Claudio Cifuentes Alonso (C), </a>
				<?php echo date("Y");?></p>
			</div>
			<div class="navbar-form navbar-right">
			</div>
  		</div>
	</nav>
<script type="text/javascript" src="recursos/js/jquery.js"></script>
<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>
</body>
</html>