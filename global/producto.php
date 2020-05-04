<?php
	class Producto  {
        private $idproducto;
        private $nombreproducto;
        private $descripcionproducto;
        private $precioproducto;
        private $imagenproducto;

        function __construct() {}

        public function getId() {
			return $this->idproducto;
        }
        public function getNombre() {
			return $this->nombreproducto;
        }
        public function getDescripcion() {
			return $this->descripcionproducto;
        }
        public function getPrecio() {
			return $this->precioproducto;
        }
        public function getImagen() {
			return $this->imagenproducto;
        }
        
        public function setId($idproducto) {
			$this->idproducto=$idproducto;
        }
        public function setNombre($nombreproducto) {
			$this->nombreproducto=$nombreproducto;
        }
        public function setDescripcion($descripcionproducto) {
			$this->descripcionproducto=$descripcionproducto;
        }
        public function setPrecio($precioproducto) {
			$this->precioproducto=$precioproducto;
        }
        public function setImagen($imagenproducto) {
			$this->imagenproducto=$imagenproducto;
        }
    }
?>