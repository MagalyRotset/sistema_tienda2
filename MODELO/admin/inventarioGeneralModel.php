<?php

function getInventariogeneral(){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
  // $sql="SELECT * FROM ventas WHERE MONTH(fecha) = '".$mes."' and YEAR(fecha) = '".$anio."' and iddepartamento='".$departamento."'";
   $sql="SELECT p.id_producto,p.nombre,p.precio,p.cantidad,p.tipo_producto,p.descripcion,d.nombre as nom from productos as p, departamentos as d WHERE p.id_departamento=d.id_departamento";
   // $sql= "SELECT * from ventas";
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
                <td><?php echo $row['nom']?></td>
                <td>
                   <!-- <button type="button" class="btn btn-danger">Eliminar <i class="fas fa-trash"></i></button>-->
                      <form action='../../CONTROLADOR/admin/inventarioGeneralController.php' method='POST'
                       onSubmit="if(!confirm('¿Realmente quiere eliminar este producto?')){return false; }">
                       <input type='hidden' name='id_prod' value="<?php echo $row["id_producto"]; ?>">
                       <input type='hidden' value='eliminarprod' name='valor'>
                       
                       
                       <?php
                        if($_SESSION["tipo_usuario"] == 1 ){
                          ?>
                      
                       <input type="submit" value="Eliminar" class="btn btn-danger" >
                      
                       <?php   
                        }
                        ?> 
                      </form>
                </td>
          </tr>
            <?php
        }  
    }  
   
 }

 function getInventario(){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
  // $sql="SELECT * FROM ventas WHERE MONTH(fecha) = '".$mes."' and YEAR(fecha) = '".$anio."' and iddepartamento='".$departamento."'";
   $sql="SELECT id_producto,nombre,precio,cantidad,tipo_producto,descripcion from productos";
   // $sql= "SELECT * from ventas";
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

  function eliminarInventario($id){  
  $conect = mysqli_connect("localhost","root","","sistema");
  $conect->set_charset("utf8");
  $sql= "DELETE  FROM productos WHERE id_producto=".$id;
  $delpel=mysqli_query($conect,$sql);
   if($delpel){
      echo "<script type=\"text/javascript\">
      alert(\"Producto eliminado\"); 
      </script>";
  
      echo "<script type=\"text/javascript\">
      window.location='../../VISTA/admin/inventario_admin.php';
      </script>";

  }
}


?>