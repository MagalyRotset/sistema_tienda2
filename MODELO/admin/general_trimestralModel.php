<?php

function getReporte(){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   $sql="SELECT * FROM ventas WHERE fecha BETWEEN '2021-01-01' and '2021-03-31'";
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

 function getReporte2(){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   $sql="SELECT * FROM ventas WHERE fecha BETWEEN '2020-10-01' and '2020-12-31'";
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

 function getReporte3(){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   $sql="SELECT * FROM ventas WHERE fecha BETWEEN '2020-07-01' and '2020-09-31'";
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

 function getReporte4(){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   $sql="SELECT * FROM ventas WHERE fecha BETWEEN '2020-04-01' and '2020-06-31'";
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

 function getReporte5(){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   $sql="SELECT * FROM ventas WHERE fecha BETWEEN '2020-01-01' and '2020-03-31'";
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


 function getmonto($mes1,$mes2){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   //$sql="SELECT * FROM ventas WHERE YEAR(fecha) = 2020";
   $sql="SELECT SUM(monto) as suma FROM ventas WHERE fecha BETWEEN '".$mes1."' and '".$mes2."' ";
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

 function getcantidad($mes1,$mes2){
    $conect = mysqli_connect("localhost","root","","sistema");
    $conect->set_charset("utf8");
   //$sql="SELECT * FROM ventas WHERE YEAR(fecha) = 2020";
   $sql="SELECT SUM(cantidad_prod) as suma FROM ventas WHERE fecha BETWEEN '".$mes1."' and '".$mes2."' ";
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