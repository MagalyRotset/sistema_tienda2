<?php
@session_start();
if(!isset($_SESSION["name"]))
{
  header("Location: login.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="style/css/main.css">
    <title>Productos</title>
</head>
<?php
require('header.php');  
include("../MODELO/productoModel.php"); 
?>

<div class="container pt-5">
  <div class="row">
        <div class="col-lg-10">
            <h1 class="text-center">Productos</h1>
        </div>
        <div class="col-lg-2">
            <a href="registro_producto.php" type="button" class="btn btn-primary">Agregar</a>

        </div>

        <div class="col-sm-12">
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Tipo producto</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        getUsers();
                    ?>
                </tbody>
        </table>        
    </div>
  </div>
</div>