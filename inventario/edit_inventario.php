<?php 
include ("../utilidades/conex.php");


$id_producto 	= $_REQUEST["id_producto2"];
$cantidad		= $_REQUEST["cantidad"];
$operacion		= $_REQUEST["operacion"];

$sql="SELECT existencia FROM inf_carta WHERE id_producto = $id_producto";
$result=mysql_query($sql,$db);
$row=mysql_fetch_object($result);

$existencia_actual = $row->existencia;

if ($operacion == 1) {
	$nueva_existencia = $existencia_actual + $cantidad;
} else {
	$nueva_existencia = $existencia_actual - $cantidad;
}


$sql="UPDATE inf_carta SET existencia = $nueva_existencia WHERE id_producto = $id_producto";
$result=mysql_query($sql,$db);

// Agregar registro (historial) al inventario

$fecha 			= date('Y-m-d');
$usuario		= $_SESSION["usuario_actual"];
$nombre_usuario	= $_SESSION["nombre_usuario"];

switch($operacion) {
	case 1:
		$comentarios = "Ingreso manual";
		break;
	case 2:
		$comentarios = "Salida manual";
		break;
} // end switch

$sql="INSERT INTO data_inventario SET ";
$sql.="fecha = '$fecha', ";
$sql.="usuario = $usuario, ";
$sql.="producto = $id_producto, ";
$sql.="cantidad = $cantidad, ";
$sql.="operacion = $operacion, ";
$sql.="comentarios = '$comentarios'";
$result=mysql_query($sql,$db);

header("Location: index.php?producto=$id_producto#Ancla");

?>