<?php
include('../utilidades/conex.php');

$codigo = $_REQUEST["codigoBarras"];
$mesa 	= $_REQUEST["mesa"];

$sql="SELECT id_producto FROM inf_carta WHERE codigoDeBarras LIKE '$codigo'";
$rs=mysql_query($sql,$db);
if (mysql_num_rows($rs) > 0) {
	// Agregar producto a la tabla temporal de ventas
		$row=mysql_fetch_object($rs);
		header("Location: add_producto.php?mesa=$mesa&producto=$row->id_producto");
} else {
	// Mostrar mensaje de producto no encontrado
		header("Location: index.php?mesa=$mesa&codigo='$codigo'");
}
 ?>