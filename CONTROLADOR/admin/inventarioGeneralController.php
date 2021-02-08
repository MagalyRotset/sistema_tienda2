<?php 

include("../../MODELO/admin/inventarioGeneralModel.php");
$accionpredefinida="verusers";
$accion=isset($_POST["valor"])? $_POST["valor"]:$accionpredefinida;

switch($accion){ 
    case 'eliminarprod':
      $id= $_POST["id_prod"];
      eliminarInventario($id);
  break;
  

}
$conexion=mysqli_connect("localhost","root","089714MG","sistema",);
//poder manipular acentos y la ñ
$conexion->set_charset("utf8");

?>