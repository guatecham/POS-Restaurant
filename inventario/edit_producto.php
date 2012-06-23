<?php 

include ("../utilidades/conex.php");

if (isset($_REQUEST["recompra"])) {
	$recompra = $_REQUEST["recompra"];
} else {
	$recompra = 0;
}

$subtipo		= $_REQUEST["subtipo"];
$precio			= $_REQUEST["precio"];
$nombre			= $_REQUEST["nombre"];
$codigo			= $_REQUEST["codigo"];
$id_producto	= $_REQUEST["id_producto"];
$provider		= $_REQUEST["providers"];

if (isset($_REQUEST["inventariado"])) {
	$inventariado = $_REQUEST["inventariado"];
} else {
	$inventariado = $recompra = 0;
}

if ($id_producto == 0) {
	$sql="INSERT INTO inf_carta SET ";
} else {
	$sql="UPDATE inf_carta SET ";
}

$sql.="producto = '$nombre', ";
$sql.="codigoDeBarras = '$codigo', ";
$sql.="precio = '$precio', ";
$sql.="subtipo = $subtipo, ";
$sql.="reorden = $recompra, ";
$sql.="provider = $provider, ";
$sql.="inventariado = $inventariado ";

if ($id_producto != 0) {
	$sql.="WHERE id_producto = $id_producto";
}

$result=mysql_query($sql,$db);
if ($id_producto == 0) {
	$id_producto = mysql_insert_id($result);
}

header("Location: index.php?producto=$id_producto");

?>