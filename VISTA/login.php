
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../VISTA/style/css/main.css">
    <title>login</title>
    <script src="main.js"></script>
</head>
<body>
    
    
<div class="row p-lg-0">
  
    <div class="col-6 p-0">
      <div class="container2-fluid">
      
      <div class="card-footer10 text-muted ">
                
        <div class="card-body">
            <section class="sect d-flex justify-content-md-center"> 
                <div class="d-flex justify-content-around">
                    <div class="text-right">
                    <br><br><br>    
                    
                        <br><br>
                        <img src="../VISTA/style/imagenes/logo_depot.png" width="300px" class="rounded p-2" alt="" >
                    </div>
                </div>
                
            </section>
        </div>
    
        
    </div>

      </div>
    </div>
  
    
    <div class="col-6 p-0" >
    <div class="container1-fluid">
    <style>
        body {
            background: url(../VISTA/style/imagenes/fondo_login.jpg);
            background-size: 50% 100%;
            background-attachment: fixed;
        }
    </style> 
      <div class="col-lg-7 offset-lg-3">
        <form class="formulario" action="../CONTROLADOR/loginController.php" method="POST" >
            <div class="form.header">
                <br><br>
                <h3 class="titulo">L<span>ogin</span></h3>
                <h4 class="titulo"><span>Ingresa tus datos</span></h4>
            
          
                  <label class="titulo">Usuario</label>
                  <input type="text" class="input" name="user" placeholder="Usuario"><br>
              
                  <label class="titulo">Contraseña</label>
                  <input type="password" class="input" name="password" placeholder="Password"><br><br>
                
                <button type="submit" class="iniciar">Iniciar</button><br>
                <div class="col-lg-6 offset-lg-8">
            <label class="titulo"><a class="titulo" href="registro_usuario.php"> Registrate</a></label>
          </div>
              </form>
          </div>
          
        </form>


      </div>


      </div>
    
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
