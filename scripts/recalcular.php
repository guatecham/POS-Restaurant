<?php
include ('../utilidades/conex.php');

/* Borrar registros de restaurante */

$sql="SELECT * FROM data_detalle_ventas WHERE id_producto IN (SELECT id_producto FROM inf_carta WHERE subtipo < 5)";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) {
	$sql="DELETE FROM data_detalle_ventas WHERE id_registro = $row->id_registro";
	$rs2=mysql_query($sql,$db);
}


/* Recalcular totales en tabla de ventas */

$sql="SELECT * FROM data_ventas";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) {
	
	$sql="SELECT SUM(precio_venta * cantidad) FROM data_detalle_ventas WHERE id_venta = $row->id_venta";
	$rs2=mysql_query($sql,$db);
	$row2=mysql_fetch_array($rs2);
	echo $sql." ".$row2["SUM(precio_venta * cantidad)"]."<br>";	 
}
?>