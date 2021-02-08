<?php 
 class productos{

    private $id_producto;
    private $nombre;
    private $precio;
    private $cantidad;
    private $tipo_producto;
    private $descripccion;
    private $id_departamento;

    public function __construct($id_producto,$nombre,$precio,$cantidad,$tipo_producto,$descripccion,$id_departamento)
    {
        $this->id_producto=$id_producto;
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->cantidad =$cantidad;
        $this->tipo_producto=$tipo_producto;
        $this->descripccion=$descripccion;
        $this->id_departamento=$id_departamento;
    }

    public function get_idProducto(){
        return $this->id_producto;
    }

    public function set_idProducto($id_producto){
        $this->id_producto=$id_producto;
    }

    public function get_nombre(){
        return $this->nombre;
    }

    public function set_nombre($nombre){
        $this->nombre=$nombre;
    }

    public function get_precio(){
        return $this->precio;
    }

    public function set_precio($precio){
        $this->precio=$precio;
    }

    public function get_cantidad(){
        return $this->cantidad;
    }

    public function set_cantidad($cantidad){
        $this->cantidad =$cantidad;
    }

    public function get_tipoProducto(){
        return $this->tipo_producto;
    }

    public function set_tipoProducto($tipo_producto){
        $this->tipo_producto=$tipo_producto;
    }

    public function get_descripcion(){
        return $this->descripcion;
    }

    public function set_descripcion($descripccion){
        $this->descripccion=$descripccion;
    }

    public function get_idDepartamento(){
        return $this->id_departamento;
    }

    public function set_idDepartamento($id_departamento){
        $this->id_departamento=$id_departamento;
    }

 }

?>