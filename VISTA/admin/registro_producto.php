<?php 
$opcion ="agregar";
    if(isset($_POST['valor'])){
        $opcion = $_POST['valor'];
        $id = $_POST['id_producto'];

        $conect= mysqli_connect("localhost","root","","sistema");
        $conect->set_charset("utf8");
            $sql="SELECT * FROM productos where id_producto = ".$id;    
            $getUs = mysqli_query($conect,$sql);
            if($getUs->num_rows > 0){
                while($fila = $getUs->fetch_object()){
                    $user = $fila; 
                break;
                }
            }
    }

    @session_start();
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../style/css/main.css">
    <title>Registro</title>
</head>

<body>

    <style>
        body {
            background: url(../style/imagenes/fondo.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>    

    <div class="container4-fluid">
      <div class="col-lg-7 offset-lg-3">
      
      <?php 
            if($opcion == 'editaruser'){
        ?>


      <form class="formulario2 " action="../../CONTROLADOR/admin/productosController.php" method="POST">
            <div class="form.header">
                <h2 class="titulo">Home <span>Depot</span></h2>
                <h2 class="titulo">Actualizar<span> Producto </span></h2>
            </div>
            <label class="titulo">Nombre: </label>
            <input class="input2"  name="nombre" type="" ><br>
            <label class="titulo">Precio </label>
            <input class="input2" type="text" id="precio" name="precio" placeholder="Precio"><br>
            <label class="titulo">Cantidad: </label>
            <input class="input2" type="int" id="cantidad" name="cantidad" placeholder="Cantidad">
            <label class="titulo">Tipo producto: </label>
            <input class="input2" type="text" id="descripcion" name="tipo_producto" placeholder="Tipo producto">
            <label class="titulo">Descripción: </label>
            <input class="input2" type="text" id="descripcion" name="descripcion" placeholder="descripcion">
            <label class="titulo" for="my-select">Departamento</label>
                <select class="input2" name="departamento">
                    <option value="1">Iluminación</option>
                    <option value="2">Pisos</option>
                    <option value="3">Baños</option>
                    <option value="4">Limpieza</option>
                    <option value="5">Pintura</option>
                </select>

            <input type="hidden" value="agregarproducto"  name="valor">
            <button type="submit" class="iniciar">Registrar</button>

            <div class="col-lg-6 offset-lg-10">
                <label class="titulo"><a class="titulo" href="inventario_admin.php"> cancelar</a></label>
            </div

        </form>


        <?php } else{?>






      <form class="formulario2 " action="../../CONTROLADOR/admin/productosController.php" method="POST">
            <div class="form.header">
                <h2 class="titulo">Home <span>Depot</span></h2>
                <h2 class="titulo">Agregar<span> Producto </span></h2>
            </div>
            <label class="titulo">Nombre: </label>
            <input class="input2" type="text" id="name_producto" name="nombre" placeholder="Nombre producto"><br>
            <label class="titulo">Precio </label>
            <input class="input2" type="text" id="precio" name="precio" placeholder="Precio"><br>
            <label class="titulo">Cantidad: </label>
            <input class="input2" type="int" id="cantidad" name="cantidad" placeholder="Cantidad">
            <label class="titulo">Tipo producto: </label>
            <input class="input2" type="text" id="descripcion" name="tipo_producto" placeholder="Tipo producto">
            <label class="titulo">Descripción: </label>
            <input class="input2" type="text" id="descripcion" name="descripcion" placeholder="descripcion">
            <label class="titulo" for="my-select">Departamento</label>
                <select class="input2" name="departamento">
                    <option value="1">Iluminación</option>
                    <option value="2">Pisos</option>
                    <option value="3">Baños</option>
                    <option value="4">Limpieza</option>
                    <option value="5">Pintura</option>
                </select>

            <input type="hidden" value="agregarproducto"  name="valor">
            <button type="submit" class="iniciar">Registrar</button>

            <div class="col-lg-6 offset-lg-10">
                <label class="titulo"><a class="titulo" href="inventario_admin.php"> cancelar</a></label>
            </div

        </form>


        <?php }?>


      </div>


      </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>