<?php 
	class Usuario{
		private $id;
		private $nombre;
		private $apellido;
		private $username;
		private $password;
		private $rol;
		
		public function getId(){
			return $id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getNombre(){
			return $nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getUsername(){
			return $username;
		}
		public function setUsername($username){
			$this->username = $username;
		}
		public function getPassword(){
			return $password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
		public function getRol(){
			return $rol;
		}
		public function setRol($rol){
			$this->rol = $rol;
		}
	}
?>