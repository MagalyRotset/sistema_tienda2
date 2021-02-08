<?php 
$opcion ="agregar";
    if(isset($_POST['valor'])){
        $opcion = $_POST['valor'];
        $id = $_POST['id_usuario'];

        $conect= mysqli_connect("localhost","root","","sistema");
        $conect->set_charset("utf8");
            $sql="SELECT * FROM usuarios where id_usuario = ".$id;    
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
    <link rel="stylesheet" type="text/css" media="screen" href="style/css/main.css">
    <title>Registro</title>
</head>

<body>
    <style>
        body {
            background: url(style/imagenes/fondo.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>    

    <div class="container3-fluid">
      <div class="col-lg-6 offset-lg-3">
    
      <form class="formulario " action="../CONTROLADOR/usuariosController.php" method="POST">
            
            <h2 class="titulo">Home <span>Depot</span></h2>
            <h2 class="titulo">Registro<span> de Usuario</span></h2>
            
            <label class="titulo">Nombre: </label>
            <input class="input" type="text" name="nombre_usuario" placeholder="Nombre completo">
            <label class="titulo">Correo: </label>
            
            <input class="input" type="text"  name="correo" placeholder="Correo">
            <label class="titulo">Contraseña:</label>
            <input class="input" type="password" name="contrasenia" placeholder="Password"><br>

            <label class="titulo" for="my-select">Tipo de Usuario</label><br>
                <select class="input" name="tipo_usuario">
                    <option value="1">Personal</option>
                    <option value="2">Admin</option>
                </select>
            

            <input type="hidden" value="agregarusuario"  name="valor">
            <button type="submit" class="iniciar">Registrar</button>



            <div class="col-lg-6 offset-lg-10">
                <label class="titulo"><a class="titulo" href="principal.php"> cancelar</a></label>
            </div

        </form>
        
    </div>



      </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>