<?php

function addUser($nombre_usuario,$correo,$contrasenia){
    $conect= mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
    $sql= "INSERT INTO `usuarios`(`id_usuario`,`nombre_usuario`,`correo`,`contrasenia`,`tipo_usuario`)
    VALUES
    (NULL, '".$nombre_usuario."', '".$correo."', '".$contrasenia."', '1')";
    
    $agregarusuario =mysqli_query($conect,$sql);
    if($agregarusuario){
        echo "<script type=\"text/javascript\">
       alert(\"Usuario Agregado\");
       </script>";
       
       echo"<script type='text/javascript'>
       window.location ='../VISTA/login.php';
       </script>";
    }
    else{
        return false;
    }
    mysqli_close($conect);
}


function getUsers(){
    $conect= mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
    $sql="SELECT * FROM `usuarios`";
    $getUs = mysqli_query($conect,$sql);
    if($getUs->num_rows > 0){
        while($row = mysqli_fetch_array($getUs)){
            
            ?>
            <tr>
                <th scope='col'><?php echo $row ["nombre_usuario"]?></th>
                <th scope='col'><?php echo $row["correo"]?></th>
                <th scope='col'><?php echo $row ["tipo_usuario"]?></th>
                
                <th scope='col'>
                <form action="../CONTROLADOR/usuariosController.php" method='POST' 
                        onsubmit="if(!confirm('Estas seguro que quieres eliminar?')){return false;}">
                        <input type='hidden' name="id_usuario" value="<?php echo $row["id_usuario"];?>">
                        <input type='hidden' value='eliminaruser' name='valor'>
                        <input type='submit' value='Eliminar' class="btn btn-danger">
                    </form>

                    <form action="../VISTA/registro_usuario_logueado.php" method='POST'>
                        <input type='hidden' name="id_usuario" value="<?php echo $row["id_usuario"];?>">
                        <input type='hidden' value='actualizar' name='valor'>
                        <input type='submit' value='Editar' class="btn btn-success">
                    </form>
            </th>
            </tr><?php

        }
    }
}


function deleteUser($id){
    $conect= mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
    $sql="DELETE FROM usuarios WHERE id_usuario = ".$id;
    $delUs = mysqli_query($conect,$sql);
    if($delUs){
        echo "<script type=\"text/javascript\">
       alert(\"Usuario Eliminado\");
       </script>";
       
       echo"<script type='text/javascript'>
       window.location = '../VISTA/usuarios.php';
       </script>";
    }
}

function updateUser(){ 
    $id = $_POST["id_user"];
    $nombre_a= $_POST["name_a"];
    $a_paterno_a= $_POST["ap_a"];    
    $a_materno_a= $_POST["am_a"];
    $usera= $_POST["user_a"];
    $perfila= $_POST["perfil_a"];
    $conect= mysqli_connect("localhost","root","","videoclub");
    $conect->set_charset("utf8");
    $sql="UPDATE usuarios SET `nombre` = '".$nombre_a."', `a_p` = '".$a_paterno_a."',
        `a_m` = '".$a_materno_a."', `user` = '".$usera."', `id_perfil` = '".$perfila."'
        WHERE `usuarios`. `id_usario` = ".$id;
        $upUs = mysqli_query($conect,$sql);

    if($upUs){
        echo "<script type=\"text/javascript\">
       alert(\"Usuario Actualizado\");
       </script>";
       
       echo"<script type='text/javascript'>
       window.location = '../admin/usuarios.php';
       </script>";
    }
}

?>


