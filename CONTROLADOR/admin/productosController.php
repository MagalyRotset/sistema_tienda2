<?php
    include("../../MODELO/admin/productoModel.php"); 
    $accionpredefinida="verusers";
    $accion = isset($_POST["valor"])? $_POST["valor"]:$accionpredefinida;
        switch($accion){
            case 'agregarproducto':
                $nombre= $_POST["nombre"];
                $precio= $_POST["precio"];
                $cantidad= $_POST["cantidad"];
                $tipo_producto= $_POST["tipo_producto"];
                $descripcion= $_POST["descripcion"];
                $departamento= $_POST["departamento"];
                

                addUser($nombre,$precio,$cantidad,$tipo_producto,$descripcion,$departamento);
            break;
            case 'eliminaruser':
                $id = $_POST["id_producto"]; 
                deleteUser($id);    
            break;
            case 'actualizar':
                updateUser();
            break;
               
        }

?>