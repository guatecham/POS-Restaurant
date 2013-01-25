<?php
include ('../../utilidades/conex.php');

$fecha      = $_REQUEST["datepicker"];
$cantidad   = $_REQUEST["cantidad"];
$cuenta     = $_REQUEST["cuenta"];
if (isset($_REQUEST["factura"])) {
	$factura	= $_REQUEST["factura"];
} else {
	$factura = 0;
}
$descripcion= $_REQUEST["descripcion"];

$f = explode("/", $fecha);
$fecha = $f[2]."-".$f[1]."-".$f[0];

$sql="INSERT INTO data_gastos SET ";
$sql.="fecha='$fecha', ";
$sql.="cantidad='$cantidad', ";
$sql.="cuenta='$cuenta', ";
$sql.="descripcion='$descripcion', ";
$sql.="factura=$factura";

$rs=mysql_query($sql,$db);
header("Location:../index.php");

?>
