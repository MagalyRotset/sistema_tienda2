<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>
<body class="fondo">
<?php 
     require('../header.php');
     include("../../MODELO/admin/inventarioGeneralModel.php");
    ?>

    <div class="container-fluid pt-5 pb-5"> 
        <center>
        <h2 class="inventario">Inventario</h2>
        </center>
        <div class="row">
               <div class="col-sm-10 offset-sm-1">
               <table class="table table-bordered">
          <thead class="encabezado">
          <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio unitario</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Tipo de producto</th>
                <th scope="col">Descripción</th>
          </tr>
          </thead>
         <tbody>
           <?php 
           // getInventario();
           ?>
        </tbody>
      </table>
               </div>
        </div>

    </div>
</body>
</html>