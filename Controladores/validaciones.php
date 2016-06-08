<?php
	include ('mensajes.php');
	class Validaciones{

		private $array;
		private $flag;
		private $mensajes;

		public function __construct()
		{
			$this->array = array(
				'valor_nombre'=>'', 'error_nombre'=>'',
				'valor_email'=>'', 'error_email'=>'',
				'valor_password'=>'', 'error_password'=>'',
				'valor_genero'=>'', 'error_genero'=>''
				);

			$this->mensajes = new Mensajes();

			$this->flag = TRUE;
		}

		public function getArray(){
			return $this->array;
		}

		public function getflag(){
			return $this->flag;
		}

		public function getMessage($message){
			$this->mensajes->setMessage($message);
			return $this->mensajes->getMessage();
		}

		public function getError($error){
			$this->mensajes->setError($error);
			return $this->mensajes->getError();
		}

		public function validarNombre($campo){
			if(empty($campo))
			{
				$this->mensajes->setError('No se ha ingresado el nombre.');
				$this->array['error_nombre'] = $this->mensajes->getError();
				$this->flag = FALSE;
			}
			else
			{
    		$this->array['valor_nombre'] = $campo;
	   			if (!preg_match("/^[a-zA-Z ]*$/",$this->array['valor_nombre']))
	   			{
	   			$this->mensajes->setError('Solo letras y espacios son permitidos.');
	      		$this->array['error_nombre'] = $this->mensajes->getError();
				$this->flag = FALSE;
	      		}
    		}
   		}

		public function validarEmail($campo){
			if(empty($campo))
			{
				$this->mensajes->setError('No se ha ingresado el email.');
				$this->array['error_email'] = $this->mensajes->getError();
				$this->flag = FALSE;		
			}
			else 
			{
    		$this->array['valor_email'] = $campo;
	    		if (!filter_var($this->array['valor_email'], FILTER_VALIDATE_EMAIL))
	    		{
	    		$this->mensajes->setError('Formato de correo no válido.');	
	      		$this->array['error_email'] = $this->mensajes->getError();
				$this->flag = FALSE;		
	    		}
	    	}
		}

		public function validaPassword($campo){
			if(empty($campo))
	    	{
	    		$this->mensajes->setError('No se ha ingresado la contraseña.');
	    		$this->array['error_password'] = $this->mensajes->getError();	
				$this->flag = FALSE;
	    	}
	    	else
	    	{
	    		$this->array['valor_password'] = $campo;
	   			if (!preg_match("/^[a-zA-Z0-9 ]*$/", $this->array['valor_password']))
	   			{
	   			$this->mensajes->setError('Únicamente letras, números y espacios son permitidos.');
	    		$this->array['error_password'] = $this->mensajes->getError();	
	      		$this->flag = FALSE;	
	      		}
	    	}
		}

		public function validaGenero()
		{
			if(empty($_POST['opradio']))
			{
				$this->mensajes->setError('No se ha seleccionado el género.');
				$this->array['error_genero'] = $this->mensajes->getError();
				$this->flag = FALSE;	
			}
			else
			{
				$this->array['valor_genero'] = $_POST['opradio'];
			}
		}
	}
?>