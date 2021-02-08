<?php 

        class ventas{

            private $idVenta;
            private $folioVenta;
            private $fecha;
            private $mes;
            private $anio;
            private $cantidadProd;
            private $cantidadTotal;

             
            public function __construct()
            {
                $this->idVenta=" ";
                $this->folioVenta=" ";
                $this->fecha=" ";
                $this->mes="";
                $this->anio="";
                $this->cantidadProd=" ";
                $this->cantidadTotal=" ";
            }

            public function get_idVenta(){
                return $this->idVenta;
            }

            public function set_idVenta($idVenta){
                $this->idVenta=$idVenta;
            }

            public function get_folioVenta(){
                return $this->folioVenta;
            }

            public function set_folioVenta($folioVenta){
                $this->folioVenta=$folioVenta;
            }
            
            public function get_mes(){
                return $this->mes;
            }

            public function set_mes($mes){
                $this->mes=$mes;
            }

            public function get_anio(){
                return $this->anio;
            }

            public function set_anio($anio){
                $this->anio=$anio;
            }
            public function get_fecha(){
                return $this->fecha;
            }

            public function set_fecha($fecha){
                $this->fecha=$fecha;
            }

            public function get_cantidadProd(){
                return $this->cantidadProd;
            }

            public function set_cantidadProd($cantidadProd){
                $this->cantidadProd=$cantidadProd;
            }

            public function get_cantidadTotal(){
                return $this->cantidadTotal;
            }

            public function set_cantidadTotal($cantidadTotal){
                $this->cantidadTotal=$cantidadTotal;
            }
        }

?>