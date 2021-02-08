<?php
  @session_start();
?>


<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="principal.php">
        <img src="../VISTA/style/imagenes/logo_depot.png" width="100px" alt="Inicio" class="logo-brand">
    </a>
    
    <ul class="navbar-nav">
    <?php
    //si se elige el usuario 1 que es administrador 
    if($_SESSION["tipo_usuario"] == 1 ){
  ?>
    <div class="navbar-nav ml-auto ">
         
      <li class="nav-item-i">
        <a class="nav-link" href="admin/inventario_admin.php">Inventario</a>
      </li>


      <ul class="nav-item-i">
        <div class="dropdown">
            <a class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reportes Generales
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../VISTA/admin/general_anual.php">Anual</a>
              <a class="dropdown-item" href="../VISTA/admin/general_mensual.php">Trimestral</a>
              <a class="dropdown-item" href="../VISTA/admin/general_trimestral.php">Mensual</a>
            </div>
        </div>       
      </ul>

      <ul class="nav-item-i">
        <div class="dropdown">
            <a class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reportes Departamento
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../VISTA/admin/departamento_anual.php">Anual</a>
              <a class="dropdown-item" href="../VISTA/admin/departamento_trimestral.php">Trimestral</a>
              <a class="dropdown-item" href="../VISTA/admin/departamento_mensual.php">Mensual</a>
            </div>
        </div>       
      </ul>
    </div>
  <?php   
    }
  ?>



<?php
  if($_SESSION["tipo_usuario"] == 2 ){
    ?>

<ul class="navbar-nav ml-auto ">
         
      <li class="nav-item-i">
        <a class="nav-link" href="director_general/inventario_general.php">Inventario</a>
      </li>


      <ul class="nav-item-i">
        <div class="dropdown">
            <a class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reportes Generales
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../VISTA/admin/general_anual.php">Anual</a>
              <a class="dropdown-item" href="../VISTA/admin/general_mensual.php">Trimestral</a>
              <a class="dropdown-item" href="../VISTA/admin/general_trimestral.php">Mensual</a>
            </div>
        </div>       
      </ul>

      <ul class="nav-item-i">
        <div class="dropdown">
            <a class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reportes Departamento
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../VISTA/admin/departamento_anual.php">Anual</a>
              <a class="dropdown-item" href="../VISTA/admin/departamento_mensual.php">Trimestral</a>
              <a class="dropdown-item" href="../VISTA/admin/departamento_trimestral.php">Mensual</a>
            </div>
        </div>       
      </ul>
        
        
      </ul>
  <?php   
    }
  ?>



<?php
  if($_SESSION["tipo_usuario"] == 3 ){
    ?>
    <ul class="navbar-nav ml-auto ">
         
    <li class="nav-item-i">
      <a class="nav-link" href="../VISTA/director_general/inventario_general.php">Inventario</a>
    </li>

      <ul class="nav-item-i">
        <div class="dropdown">
            <a class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reportes Subdepartamentos
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../VISTA/admin/departamento_anual.php">Anual</a>
              <a class="dropdown-item" href="../VISTA/admin/departamento_trimestral.php">Trimestral</a>
              <a class="dropdown-item" href="../VISTA/admin/departamento_mensual.php">Mensual</a>
            </div>
        </div>       
      </ul>
    </ul>

    <?php 
      }
    ?>
   
   <?php
    if($_SESSION["tipo_usuario"] == 4 ){
  ?>
    <ul class="navbar-nav ml-auto ">
         
         <li class="nav-item-i">
           <a class="nav-link" href="director_general/inventario_general.php">Inventario</a>
         </li>
    </ul>
    <?php 
      }
    ?>

</ul>  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
            
            <div class="d-flex flex-column">
                <li> 
                
                    <form class="form-inline my-2 my-lg-0">
                        <li class="nav-item-r">  
                            <a class="nav-link"><?php echo ($_SESSION["name"])?></a>
                        </li>
                    
                        <li class="nav-item-r">
                        <a class="nav-link " href="../CONTROLADOR/salir.php" tabindex="-1" aria-disabled="true">Salir</a>
                        </li>  
                    </form>
                </li>
            </div>
        </ul>
    </div>
    
</nav>

