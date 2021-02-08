<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../style/css/main.css">  
    <link rel="stylesheet" type="text/css" media="screen" href="../style/estilos_reportes.css">
    <title>Document</title>
</head>
<body class="fondo">
  <?php 
  require('header.php');
  include("../../MODELO/admin/departamento_anualModel.php");
  ?>
    <div class="container-fluid pt-5 pb-5">
        <div class="row">
          <div class="col-sm-6 offset-sm-3">
            <div class="card-header bg-secondary">
              Reporte General Anual
            </div>
            <div class="card-body">
              <form method="POST" >
                <div class="form-group pt-2">
                    <label for="my-select">Seleccione el año</label>
                    <select class="custom-select" name="anio">
                    <option value="0"></option>
                      <option value="2021">2021</option>
                      <option value="2020">2020</option>
                    </select>
                </div> 
                <div class="form-group pt-2">
                    <label for="my-select">Seleccione el departamento</label>
                    <select class="custom-select" name="depa">
                    <option value="0"></option>
                      <option value="2">Departamento de pinturas</option>
                      <option value="3">Departamento de jardín</option>
                      <option value="4">Departamento de materiales de construcción</option>
                    </select>
                </div> 
                <br>
                <center>
                  <!-- <input type="hidden" value="buscarventas"  name="valor"> -->
                   <button type="submit" class="btn btn-warning">Buscar</button>
                </center>
               </form>
             </div>
          </div>
          <div class="col-sm-12 pt-3">
         <table class="table">
          <thead class="encabezado">
          <tr>
                <th scope="col">Código</th>
                <th scope="col">cantidad vendida</th>
                <th scope="col">Total</th>
                <th scope="col">Fecha</th>
          </tr>
          </thead>
         <tbody>
               <?php
               if($_SERVER["REQUEST_METHOD"] == "POST"){
                $anio=$_POST["anio"];
                $depa=$_POST["depa"];
                getReporte($anio,$depa);
                getmonto($anio,$depa);
                getcantidad($anio,$depa);
              }
               ?>
  </tbody>
</table>
    </div>
</div>
 </div>


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>