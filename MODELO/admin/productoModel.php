<?php

function addUser($nombre,$precio,$cantidad,$tipo_producto,$descripcion,$departamento){
    $conect= mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
    //$sql="CALL inserta_usuario(NULL, '".$nombre_usuario."','".$correo."', '".$contrasenia."', '".$tipo_usuario."')";
    $sql= "INSERT INTO `productos`(`id_producto`,`nombre`,`precio`,`cantidad`,`tipo_producto`,`descripcion`,`id_departamento`)
    VALUES
    (NULL, '".$nombre."', '".$precio."', '".$cantidad."', '".$tipo_producto."', '".$descripcion."', '".$departamento."')";
    
    $agregarproducto =mysqli_query($conect,$sql);
    if($agregarproducto){
        echo "<script type=\"text/javascript\">
       alert(\"Producto Agregado\");
       </script>";
       
       echo"<script type='text/javascript'>
       window.location ='../../VISTA/admin/inventario_admin.php';
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
    $sql="SELECT * FROM `productos`";
    $getUs = mysqli_query($conect,$sql);
    if($getUs->num_rows > 0){
        while($row = mysqli_fetch_array($getUs)){
            
            ?>
            <tr>
                <th scope='col'><?php echo $row ["nombre"]?></th>
                <th scope='col'><?php echo $row["precio"]?></th>
                <th scope='col'><?php echo $row ["cantidad"]?></th>
                <th scope='col'><?php echo $row ["tipo_producto"]?></th>
                <th scope='col'><?php echo $row ["descripcion"]?></th>
                
                <th scope='col'><?php echo $row ["id_departamento"]?></th>
                
                <th scope='col'>
                <form action="../CONTROLADOR/productosController.php" method='POST' 
                        onsubmit="if(!confirm('Estas seguro que quieres eliminar?')){return false;}">
                        <input type='hidden' name="id_producto" value="<?php echo $row["id_producto"];?>">
                        <input type='hidden' value='eliminaruser' name='valor'>
                        <input type='submit' value='Eliminar' class="btn btn-danger">
                    </form>

                    <form action="../VISTA/registro_producto.php" method='POST'>
                        <input type='hidden' name="id_producto" value="<?php echo $row["id_producto"];?>">
                        <input type='hidden' value='editaruser' name='valor'>
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
    $sql="DELETE FROM productos WHERE id_producto = ".$id;
    $delUs = mysqli_query($conect,$sql);
    if($delUs){
        echo "<script type=\"text/javascript\">
       alert(\"Usuario Eliminado\");
       </script>";
       
       echo"<script type='text/javascript'>
       window.location = '../VISTA/productos.php';
       </script>";
    }
}

function updateUser(){ 
    $id = $_POST["id_producto"];
    $nombre_a= $_POST["nombre"];
    $precio_a= $_POST["precio"];    
    $cantidad_a= $_POST["cantidad"];
    $tipo_producto_a= $_POST["tipo_producto"];
    $descripcion_a= $_POST["descripcion"];
    $departamento_a= $_POST["departamento"];
    $conect= mysqli_connect("localhost","root","","videoclub");
    $conect->set_charset("utf8");
    $sql="UPDATE productos SET `nombre` = '".$nombre_a."', `precio` = '".$precio_a."',
        `cantidad` = '".$cantidad_a."', `tipo_producto` = '".$tipo_producto_a."', `descripcion` = '".$descripcion_a."',
        `departamento` = '".$departamento_a."'
        WHERE `usuarios`. `id_producto` = ".$id;
        $upUs = mysqli_query($conect,$sql);

    if($upUs){
        echo "<script type=\"text/javascript\">
       alert(\"Producto Actualizado\");
       </script>";
       
       echo"<script type='text/javascript'>
       window.location = '../VISTA/productos.php';
       </script>";
    }
}

?>
