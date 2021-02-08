<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../style/css/main.css">  
    <link rel="stylesheet" type="text/css" media="screen" href="../style/estilos_reportes.css"> 
    
    <title>Document</title>
</head>
<body class="fondo">
<?php 
   require('../header.php');
  ?>
    <div class="container-fluid pt-5 pb-5">
        <div class="row">
          <div class="col-sm-6 offset-sm-3">
            <div class="card-header bg-secondary">
              Reporte trimestral
            </div>
            <div class="card-body">
                <center>
               <div class="form-group pt-1">
               <label for="my-select">Seleccione un departamento</label>
               <select class="custom-select" name="director_n">
                      <option></option>
                      <option value="1">Todos los departamentos</option>
                      <option value="2">Departamento de decoración</option>
                      <option value="3">Departamento de pinturas</option>
                      <option value="4">Departamento de jardín</option>
                      <option value="5">Departamento de materiales de construcción</option>
                      <option value="6">Departamento de Ferretería</option>
                </select>
                </div>
                <div class="form-group pt-3">
               <label for="my-select">Seleccione periodo trimestral</label>
               <select class="custom-select" name="trimestral">
                      <option ></option>
                      <option value="1">enero-marzo/2021</option>
                      <option value="2">octubre-diciembre/2020</option>
                      <option value="3">julio-septiembre/2020</option>
                      <option value="4">abril-junio/2020</option>
                      <option value="4">enero-marzo/2020</option>
                </select>
                </div>
                <!--
                <div class="form-group pt-2" >
                      <label >Ingrese contraseña de acceso</label>
                      <input type="password" class="form-control" name="contrasenia"  >
                </div>  
                -->
                <div class="d-grid gap-2 col-6 mx-auto pt-3">
                   <button class="btn btn-warning" type="button" >Crear reporte</button>
                </div>
                </center>
              </div>
          </div>


          <div class="col-sm-12 pt-3">
         <table class="table table-bordered">
          <thead class="encabezado">
          <tr>
                <th scope="col"># Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">cantidad vendida</th>
                <th scope="col">Total</th>
                <th scope="col">Fecha</th>
          </tr>
          </thead>
         <tbody>
           <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
          </tr>
          <tr>
                <th >2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
          </tr>
          <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
          </tr>
        </tbody>
      </table>
    </div>
   </div>
 </div>
</body>
</html>