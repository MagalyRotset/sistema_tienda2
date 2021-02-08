<?php

function getReporte($mes,$anio,$depa){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   $sql="SELECT * FROM ventas WHERE MONTH(fecha)='".$mes."' and YEAR(fecha) ='".$anio."' and id_departamento='".$depa."'";
   // $sql= "SELECT * from ventas";
    $getUs=mysqli_query($conect,$sql);
    if($getUs->num_rows >0){
        while($row=mysqli_fetch_array($getUs)){
            ?>
             <tr>
                <th><?php echo $row['folio_venta']?></th>
                <td><?php echo $row['monto']?></td>
                <td><?php echo $row['cantidad_prod']?></td>
                <td><?php echo $row['fecha']?></td>
          </tr>
            <?php
        }  
    }  
   
 }

 function getmonto($mes,$anio,$depa){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   //$sql="SELECT * FROM ventas WHERE YEAR(fecha) = 2020";
   $sql="SELECT SUM(monto) as suma FROM ventas WHERE MONTH(fecha)='".$mes."' and YEAR(fecha) ='".$anio."' and id_departamento='".$depa."'";
   $getUs=mysqli_query($conect,$sql);
    if($getUs->num_rows >0){
        while($row=mysqli_fetch_array($getUs)){
            ?>
          <div class="col-sm-6 offset-sm-3">
            <div class="card-header bg-secondary">
              <a>Monto total: <?php  echo $row['suma']?></a>
              
            </div>
          </div>
            <?php
        }  
    } 
   
 }

 function getcantidad($mes,$anio,$depa){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   //$sql="SELECT * FROM ventas WHERE YEAR(fecha) = 2020";
   $sql="SELECT SUM(cantidad_prod) as suma FROM ventas WHERE  MONTH(fecha)='".$mes."' and YEAR(fecha) ='".$anio."' and id_departamento='".$depa."'";
   $getUs=mysqli_query($conect,$sql);
    if($getUs->num_rows >0){
        while($row=mysqli_fetch_array($getUs)){
            ?>
         <div class="col-sm-6 offset-sm-3">
            <div class="card-header bg-secondary">
              <a>Monto total: <?php  echo $row['suma']?></a>
              
            </div>
         </div>
            <?php
        }  
    } 
   
 }
?>