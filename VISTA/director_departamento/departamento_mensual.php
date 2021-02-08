<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../style/css/main.css">  
    <link rel="stylesheet" type="text/css" media="screen" href="../style/estilos_reportes.css"> 
    <title>Reportes mensuales</title>
</head>
<body class="fondo">
<?php 
   require('../header.php');
 include("../../MODELO/admin/reportesModel.php");
  ?>
    <div class="container-fluid pt-5 pb-5">
        <div class="row">
          <div class="col-sm-6 offset-sm-3">
            <div class="card-header bg-secondary">
              Reporte mensual
            </div>
            <div class="card-body pd-3">
                <form method="POST" action="../../CONTROLADOR/admin/reportesController.php" >
               
                <div class="form-group pt-3">
               <label for="my-select">Seleccione el mes</label>
               <select class="custom-select" name="mesmensual">
                      <option ></option>
                      <option value="1">01</option>
                      <option value="2">02</option>
                      <option value="3">03</option>
                      <option value="4">04</option>
                      <option value="5">05</option>
                      <option value="6">06</option>
                      <option value="7">07</option>
                      <option value="8">08</option>
                      <option value="9">09</option>
                      <option value="10">10</option> 
                      <option value="11">11</option>
                      <option value="12">12</option>
                </select>
                </div>
                <div class="form-group pt-3">
               <label for="my-select">Seleccione el año</label>
               <select class="custom-select" name="aniomensual">
                      <option ></option>
                      <option value="1">2021</option>
                      <option value="2">2020</option>
                      <option value="3">2019</option>
                      <option value="4">2018</option>
                </select>
                </div>
               <!-- <div class="form-group pt-2" >
                      <label >Ingrese contraseña de acceso</label>
                      <input type="password" class="form-control" name="contrasenia"  >
                </div>  -->
                <br>
                <center>
                <input value="buscarReporte" type="hidden" name="valor">
                <button type="submit" class="btn btn-warning pt-2">Crear reporte</button>
                </center>
                </div>
              </form>
            </div>
          
          <div class="col-sm-12 pt-3">
         <table class="table table-bordered">
          <thead class="encabezado">
          <tr>
                <th scope="col"># Código</th>
                <th scope="col">cantidad vendida</th>
                <th scope="col">Total</th>
                <th scope="col">Fecha</th>
          </tr>
          </thead>
         <tbody>
           <?php 
           
            getReportes("01","2021");
           ?>
        </tbody>
      </table>
    </div>
   </div>
 </div>
</body>
</html>