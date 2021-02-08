<?php 

        class departamentos{

            private $idDepartamento;
            private $nombre;

            public function __construct($idDepartamento,$nombre)
            {
                $this->idDepartamento=$idDepartamento;
                $this->nombre=$nombre;
            }

            public function get_idDepartamento(){
                return $this->idDepartamento;
            }

            public function set_idDepartamento($idDepartamento){
                $this->idDepartamento=$idDepartamento;
            }

            public function get_nombre(){
                return $this->nombre;
            }

            public function set_nombre($nombre){
                $this->nombre=$nombre;
            }
        }
?>