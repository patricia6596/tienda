<?php

	/*En este fichero se crea la clase usuario con todas sus variables y funciones */

	class Usuario  {
		private $nombre;
		private $apellidos;
		private $contr;
		private $email;
		private $fechanacimiento;
		private $dni;
		private $estadocivil;
		private $telefono;
		private $direccion;
		private $numero;
		private $localidad;
		private $codigopostal;
		private $provincia;
		private $pais;

		function __construct() {}

		public function getNombre() {
			return $this->nombre;
		}
		public function getApellidos() {
			return $this->apellidos;
		}
		public function getContr() { 
			return $this->contr;
		}
		public function getEmail() {
			return $this->email;
		}
		public function getFecha() {
			return $this->fechanacimiento;
		}
		public function getDni() {
			return $this->dni;
		}
		public function getEstado() {
			return $this->estadocivil;
		}
		public function getTelefono() {
			return $this->telefono;
		}
		public function getDireccion() {
			return $this->direccion;
		}
		public function getNumero() {
			return $this->numero;
		}
		public function getLocalidad() {
			return $this->localidad;
		}
		public function getCodigo() {
			return $this->codigopostal;
		}
		public function getProvincia() {
			return $this->provincia;
		}
		public function getPais() {
			return $this->pais;
		}

		public function setNombre($nombre) {
			$this->nombre=$nombre;
		}
		public function setApellidos($apellidos) {
			$this->apellidos=$apellidos;
		}
		public function setContr($contr) {
			$this->contr=$contr;
		}
		public function setEmail($email) {
			$this->email=$email;
		}
		public function setFecha($fechanacimiento) {
			$this->fechanacimiento=$fechanacimiento;
		}
		public function setDni($dni) {
			$this->dni=$dni;
		}
		public function setEstado($estadocivil) {
			$this->estadocivil=$estadocivil;
		}
		public function setTelefono($telefono) {
			$this->telefono=$telefono;
		}
		public function setDireccion($direccion) {
			$this->direccion=$direccion;
		}
		public function setNumero($numero) {
			$this->numero=$numero;
		}
		public function setLocalidad($localidad) {
			$this->localidad=$localidad;
		}
		public function setCodigo($codigopostal) {
			$this->codigopostal=$codigopostal;
		}
		public function setProvincia($provincia) {
			$this->provincia=$provincia;
		}
		public function setPais($pais) {
			$this->pais=$pais;
		}
	}

?>