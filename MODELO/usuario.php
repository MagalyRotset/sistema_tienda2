<?php 
     
     class usuario{
         private $id_usuario;
         private $nombreUsuario;
         private $contrasenia;
         private $correo;
         private $tipoUsuario;

        
         public function __construct($id_usuario,$nombreUsuario,$contrasenia,$correo,$tipoUsuario)
         {
             $this->id_usuario=$id_usuario;
             $this->nombreUsuario=$nombreUsuario;
             $this->contrasenia=$contrasenia;
             $this->correo=$correo;
             $this->tipoUsuario=$tipoUsuario;
         }

         public function get_idUsuario(){
             return $this->id_usuario;
         }

         public function set_idUsuario($id_usuario){
            $this->id_usuario=$id_usuario;
         }

         public function get_nombreUsuario(){
             return $this->nombreUsuario;
         }

         public function set_nombreUsuario($nombreUsuario){
            $this->nombreUsuario=$nombreUsuario;
         }

         public function get_contrasenia(){
              return $this->contrasenia;
         }

         public function set_contrasenia($contrasenia){
            $this->contrasenia=$contrasenia;
         }

         public function get_correo(){
             return $this->correo;
         }

         public function set_correo($correo){
            $this->correo=$correo;
         }

         public function get_tipoUsuario(){
             return $this->tipoUsuario;
         }

         public function set_tipoUsuario($tipoUsuario){
            $this->tipoUsuario=$tipoUsuario;
         }

     }

?>