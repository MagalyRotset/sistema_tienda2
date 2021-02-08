<?php
    include("../MODELO/usuarioModel.php"); 
    $accionpredefinida="verusers";
    $accion = isset($_POST["valor"])? $_POST["valor"]:$accionpredefinida;
        switch($accion){
            case 'agregarusuario':
                $nombre_usuario= $_POST["nombre_usuario"];
                $correo= $_POST["correo"];
                $contrasenia= $_POST["contrasenia"];
               
                addUser($nombre_usuario,$correo,$contrasenia);
            break;
            case 'eliminaruser':
                $id = $_POST["id_usuario"];   
                deleteUser($id);    
            break;
            case 'actualizar':
                updateUser();
            break;
               
        }

?>

