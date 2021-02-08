<?php
function getInventario($depa){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
  //  $sql="SELECT p.id_producto,p.nombre,p.precio,p.cantidad,p.tipo_producto,p.descripcion, from productos as p, departamentos as d WHERE p.id_departamento=d.id_departamento";
   $sql="SELECT id_producto,nombre,precio,cantidad,tipo_producto,descripcion from productos where id_departamento='".$depa."'";
    $getUs=mysqli_query($conect,$sql);
    if($getUs->num_rows >0){
        while($row=mysqli_fetch_array($getUs)){
            ?>
             <tr>
                <th><?php echo $row['id_producto']?></th>
                <td><?php echo $row['nombre']?></td>
                <td><?php echo $row['precio']?></td>
                <td><?php echo $row['cantidad']?></td>
                <td><?php echo $row['tipo_producto']?></td>
                <td><?php echo $row['descripcion']?></td>
          </tr>
            <?php
        }  
    }  
   
 }

?>