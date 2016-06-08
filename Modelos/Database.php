<?php
	class Database
	{
		private $con;
		private $data;

		public function __construct(){
			$config = new Config();
			$this->data = $config->getConfigDB();
		}

		public function conectar(){
			$this->con = new mysqli(
				$this->data['host'],
				$this->data['user'], 
				$this->data['password'],
				$this->data['database']);
		}

		public function getCon(){
			return $this->con;
		}

		public function closeCon(){
			$this->con->close();
		}

		public function createTable(){
			$sql = "CREATE TABLE IF NOT EXISTS usuarios(
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			nombre  VARCHAR(25), email VARCHAR(40), 
			password VARCHAR(25), sexo VARCHAR(10))";
			$result = $this->con->query($sql);
			return $result;
		}

		public function verifyByEmail($email){
			$sql = "SELECT * FROM usuarios WHERE email = '$email'";
			$result= $this->con->query($sql);
			if($this->con->affected_rows>0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

		public function verifyPassword($email, $password){
			$sql = "SELECT * FROM usuarios WHERE email='$email'
			AND password='$password'";
			$result= $this->con->query($sql);
			if($this->con->affected_rows>0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}

		}

		public function getPassword($email){
			$sql = "SELECT password FROM usuarios WHERE email = '$email'";
			$result = $this->con->query($sql);
			return $result;
		}

		public function insertUser($nombre, $email, $password, $sexo){
			$sql = "INSERT INTO usuarios(nombre, email, password, sexo) 
			VALUES ('$nombre', '$email', '$password', '$sexo')";
			$this->con->query($sql);
		}
	}
?>