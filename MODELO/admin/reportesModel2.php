<?php 

//$sql="SELECT * FROM ventas WHERE MONTH(fecha) = '".$mes."' and YEAR(fecha) = '".$anio."' and iddepartamento='".$departamento."'";
 
 function getReportes($mes,$anio){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   $sql="SELECT * FROM ventas WHERE MONTH(fecha) = '".$mes."' and YEAR(fecha) = '".$anio."'";
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



?>