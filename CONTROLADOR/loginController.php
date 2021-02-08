<?php 

    $con = mysqli_connect("localhost","root","","sistema");
    $con->set_charset("utf8");
    
    if($_POST["user"] != "" && $_POST["password"] != ""){   
        $usuario = $_POST["user"];
        $contrasenia= $_POST["password"];
        $consulta= "SELECT * FROM usuarios WHERE correo='".$usuario."' AND contrasenia='".$contrasenia."'";
        $log= mysqli_query($con, $consulta);
      
       if($log->num_rows > 0){

           while($row = mysqli_fetch_array($log)){
               @session_start();
                $_SESSION["name"] = $row["nombre_usuario"];
                $_SESSION["correo"] = $row["correo"]; 
                $_SESSION["contrasenia"] = $row["contrasenia"]; 
                $_SESSION["tipo_usuario"] = $row["tipo_usuario"]; 
            }
            


            switch($_SESSION["tipo_usuario"]){
                case 1: 
                    //Administrador
                    echo "<script type=\"text/javascript\">
                    alert(\"Usuario: Administrador\");
                    </script>";
                    
                    echo"<script type='text/javascript'>
                    window.location = '../VISTA/principal.php';
                    </script>";
                break;
                case 2:
                    //Director General
                    echo "<script type=\"text/javascript\">
                    alert(\"Usuario: Director General \");
                    </script>";
                    
                    echo"<script type='text/javascript'>
                    window.location = '../VISTA/principal.php';
                    </script>";
                break;
                case 3:
                    //Departamentos
                    echo "<script type=\"text/javascript\">
                    alert(\"Usuario: Departamentos\");
                    </script>";
                    
                    echo"<script type='text/javascript'>
                    window.location = '../VISTA/principal.php';
                    </script>";
                break;
                case 4:
                    //Personal
                    echo "<script type=\"text/javascript\">
                    alert(\"Usuario: Personal\");
                    </script>";
                    
                    echo"<script type='text/javascript'>
                    window.location = '../VISTA/principal.php';
                    </script>";
                break;
            }

            




   }else{
       echo"<script type=\"text/javascript\">
       alert(\"Usuario o contraseña incorrrecta\");
       </script>";
   
       echo"<script type='text/javascript'>
       window.location ='../VISTA/login.php';
       </script>";
   }
   }else{
       echo"<script type=\"text/javascript\">
       alert(\"vacio\");
       </script>";
   
       echo"<script type='text/javascript'>
       window.location='../VISTA/login.php';
       </script>";
   }   
?>