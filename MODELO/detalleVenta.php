<?php 

    class detalleVenta{

        private $idVenta;
        private $idProducto;

        public function __construct($idVenta,$idProducto)
        {
            $this->idVenta=$idVenta;
            $this->idProducto=$idProducto;
        }

        public function get_idVenta(){
            return $this->idVenta;
        }

        public function set_idVenta($idVenta){
            $this->idVenta=$idVenta;
        }

        public function get_idProducto(){
            return $this->idProducto;
        }

        public function set_idProducto($idProducto){
            $this->idProducto=$idProducto;
        }
    }


?>