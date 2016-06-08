<?php
	class Config
	{
		//Parámetros de la conexión a la base de datos
		public function __construct(){

		}

		public function getConfigDB(){
			/*$data = array(
				'host'=>'localhost', 
				'user'=>'claudio',
				'password'=>'root', 
				'database'=>'personal');
			return $data;*/
			$data = array(
				'host'=>'mysql1.000webhost.com', 
				'user'=>'a9199032_claudio',
				'password'=>'goyostardust10', 
				'database'=>'a9199032_persona');
			return $data;
		}
	}

?>