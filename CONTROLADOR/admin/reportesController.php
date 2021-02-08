<?php 
 include("../../MODELO/admin/reportesModel.php");
// include("../VISTA/reporte_mensual.php");

$accionpredefinida="verusers";
$accion=isset($_POST["valor"])? $_POST["valor"]:$accionpredefinida;

switch($accion){ 
    case 'buscarReporte':
      $mes= $_POST["mesmensual"];
      $anio=$_POST["aniomensual"];
      getReportes($mes,$anio);
  break;
  

}
$conexion=mysqli_connect("localhost","root","","sistema",);
//poder manipular acentos y la ñ
$conexion->set_charset("utf8");

?>