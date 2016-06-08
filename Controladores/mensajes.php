<?php
	class Mensajes
	{
		private $mensaje_error;
		private $mensaje_exito;
		private $mensaje_aviso;

		public function __construct(){
			$this->mensaje_aviso = "";
			$this->mensaje_exito= "";
			$this->mensaje_error = "";
		}

		public function setError($message){
			$this->mensaje_error ="<div class='alert alert-danger'>
					<button class='close' data-dismiss='alert'>
					<span aria-hidden='true'>&times;</span>
					</button><strong>¡Alerta! </strong>".$message."</div>";
		}

		public function getError(){
			return $this->mensaje_error;
		}	

		public function setMessage($message){
			$this->mensaje_aviso = "<div class='alert alert-info'>
					<button class='close' data-dismiss='alert'>
					<span aria-hidden='true'>&times;</span>
					</button><strong>".$message."</strong></div>";
		}

		public function getMessage(){
			return $this->mensaje_aviso;
		}
	}
?>