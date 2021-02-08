<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../VISTA/style/estilos_reportes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/27b58e98f5.js" crossorigin="anonymous"></script>
    <title>Inventario</title>
</head>
<body class="fondo">
<?php 
     require('../header.php');
     include("../../MODELO/personal/inventario_personalModel.php");
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
            getInventario(1);
           ?>
        </tbody>
      </table>
               </div>
        </div>

    </div>
</body>
</html>