<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Principal</title>
<link rel="stylesheet" href="recursos/css/bootstrap.min.css">
<link rel="stylesheet" href="recursos/css/estilos.css">
</head>
<body>
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
					<p class="navbar-text"><i>Has iniciado sesión con: <?php echo $_SESSION['user'];?></i></p>
				</div>
				<div class="navbar-form navbar-right">
						<div class="btn-group">
							<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Opciones <span class="caret"></span>
							</button>
							  <ul class="dropdown-menu">
							    <li><a href="#">Modificar datos</a></li>
							    <li><a href="#">Contacto</a></li>
							    <li role="separator" class="divider"></li>
							    <li><a href="principal.php">Cerrar sesión</a></li>
							  </ul>
						</div>
				</div>
			</div>
		</nav>
	<section class="main container">
		<div class="row">
			<section class="col-md-8">
				<div class="breadcrumb-cl">
					<ol class="breadcrumb">
						<li><a href="#">Principal</a></li>
						<li class="active">Novedades</li>
					</ol>
				</div>
				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img src="recursos/css/img/avast.jpg" alt="" class="img-thumbnail">
					</a>
					<h2 class="post-title">
						<a href="#">Avast</a>
					</h2>
					<p><span class="fecha-cl">7 de Junio de 2016</span> por
					<span class=""><a href="#">Claudio Antonio Cifuentes Alonso</a></span></p>
					<p class="post-contenido text-justify">Avast es un potente antivirus y antimalware gratuito, ligero y rápido. Con más de 230 millones de sensores, Avast es de los primeros en detectar nuevas amenazas. Además, Avast protege los datos personales de sus  usuarios, garantizando la confidencialidad.</p>
					<p class="post-contenido text-justify">El software se puede descargar directamente de su página oficial. De igual forma Avast ofrece versiones con un costo en la licencia, con ventajas de protección adicionales a su versión gratuita.</p>
					<div class="" align="center">
						<a href="#" class="btn btn-primary">Leer más</a>
						<a href="https://www.avast.com/es-mx/index" class="btn btn-success" target="_blank">Descarga</a>
					</div>
				</article>

				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img src="recursos/css/img/laravel.jpg" alt="" class="img-thumbnail">
					</a>
					<h2 class="post-title">
						<a href="#">Laravel 5</a>
					</h2>
					<p><span class="fecha-cl">22 de Mayo de 2016</span> por
					<span class="autor-cl"><a href="#">Claudio Antonio Cifuentes Alonso</a></span></p>
					<p class="post-contenido text-justify">Laravel es un <i>framework</i> de código abierto para desarrollar aplicaciones web utilizando PHP con el patrón MVC. Laravel ha ganado popularidad en los últimos años desplazando en popularidad a otros <i>frameworks</i> como CodeIgniter o Symfony.</p>
					<p class="post-contenido text-justify">Se puede crear un proyecto con Laravel utilizando <i>Composer</i> para descargar todos los archivos de Laravel y administrar los paquetes de la aplicación.</p>
					<div class="" align="center">
						<a href="https://getcomposer.org/" class="btn btn-primary" target="_blank">Composer</a>
						<a href="https://laravel.com/" class="btn btn-success" target="_blank">Documentación oficial de Laravel</span></a>
					</div>
				</article>

				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img src="recursos/css/img/sublime.jpg" alt="" class="img-thumbnail">
					</a>
					<h2 class="post-title">
						<a href="#">Sublime Text</a>
					</h2>
					<p><span class="fecha-cl">2 de Mayo de 2016</span> por
					<span class="autor-cl"><a href="#">Claudio Antonio Cifuentes Alonso</a></span></p>
					<p class="post-contenido text-justify">Sublime Text es un editor de texto que se puede descargar para su evaluación desde su página oficial, está construido en C++ y Python. Tiene una gran cantidad de complementos que facilitan la construcción de código, sobre todo para el desarrollo de aplicaciones web utilizando HTML5.</p>
					<p class="post-contenido text-justify">No se trata de un software de código abierto, ya que debemos de obtener una licencia para su uso continuo.</p>
					<div class="" align="center">
						<a href="#" class="btn btn-primary">Leer más</a>
						<a href="https://www.sublimetext.com/" class="btn btn-success" target="_blank">Descarga</a>
					</div>
				</article>

				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img src="recursos/css/img/github.jpg" alt="" class="img-thumbnail">
					</a>
					<h2 class="post-title">
						<a href="#">Git</a>
					</h2>
					<p><span class="fecha-cl">25 de Abril de 2016</span> por
					<span class="autor-cl"><a href="#">Claudio Antonio Cifuentes Alonso</a></span></p>
					<p class="post-contenido text-justify">Git es un software para el control de versiones en proyectos de software en las cuales se tiene un gran número de archivos o se necesita la colaboración de un gran número de desarrolladores. Git actualmente tiene al grupo de desarrolladores del núcleo Linux trabajando en sus repositorios.</p>
					<p class="post-contenido text-justify">Git es un software que se instala en la máquina donde desemos trabajar, para el manejo de respositorios locales. Github en cambio, es la aplicación en donde se almacenan los repositorios de forma remota, es necesario crear una cuenta y crear los repositorios necesarios para trabajar con ambos.</p>
					<div class="" align="center">
						<a href="https://git-scm.com/downloads" class="btn btn-primary" target="_blank">Descarga Git</a>
						<a href="https://github.com/" class="btn btn-success" target="_blank">Github</a>
					</div>
				</article>
			</section>
			<aside class="col-md-4 hidden-xs hidden-sm">
				<h3>Novedades</h3>
				<div class="thumbnail">
			      	<img src="recursos/css/img/ecgosc.png">
				    <div class="caption" align="center">
				        <h4>Trabajo Terminal 2015A-046</h4>
				        <p>Prototipo de electrocardiógrafo para dispositivos móviles con monitoreo remoto.</p>
				        <p><a href="#" class="btn btn-primary" role="button">Más información</a> <a href="https://www.youtube.com/watch?v=xyI-ffr_Mmc" class="btn btn-danger" role="button" target="_blank">Ver en Youtube</a></p>
				     </div>
			    </div>
			    <h3>Acerca del sitio</h3>
			    <div class="thumbnail">
			      	<img src="recursos/css/img/phpele.png">
				    <div class="caption" align="center">
				        <h4>PHP</h4>
				        <p>La parte <i>backend</i> del sitio está construida utilizando PHP</p>
				        <p><a href="http://php.net/" class="btn btn-primary" role="button" target="_blank">Documentación</a></p>
				     </div>
			    </div>
			    <div class="thumbnail">
			      	<img src="recursos/css/img/bootstrap.jpg">
				    <div class="caption" align="center">
				        <h4>Bootstrap 3</h4>
				        <p>La parte <i>frontend</i></i> del sitio está construida utilizando Bootstrap 3</p>
				        <p><a href="http://getbootstrap.com/components/" class="btn btn-primary" role="button" target="_blank">Documentación</a></p>
				     </div>
			    </div>
			</aside>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>Claudio Cifuentes Alonso (C)</p>
				</div>
			</div>
		</div>
	</footer>

<script type="text/javascript" src="recursos/js/jquery.js"></script>
<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>
</body>
</html>