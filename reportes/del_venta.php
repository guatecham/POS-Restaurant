<?php 
include ('../utilidades/conex.php');


$id = $_REQUEST["id"];

// Regresar todos los productos del inventario
$sql="SELECT * FROM data_detalle_ventas WHERE id_venta = $id";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) {
	$producto = $row->id_producto;
	$cantidad = $row->cantidad;
	
	$sql="SELECT * FROM inf_carta WHERE id_producto = $producto";
	$rs2=mysql_query($sql,$db);
	$row2=mysql_fetch_object($rs2);
	$existencia = $row2->existencia;
	
	$nueva_existencia = $existencia + $cantidad;
	
	$sql="UPDATE inf_carta SET existencia = $nueva_existencia WHERE id_producto = $producto";
	$rs2=mysql_query($sql,$db);
	
	$fecha = date('Y-m-d');
	$usuario=0;
	$comentarios = "Eliminacion manual de una venta";
		
	$sql="INSERT INTO data_inventario SET fecha='$fecha', usuario = $usuario, producto = $producto, cantidad=$cantidad, operacion=1, comentarios='$comentarios'";
	$rs2=mysql_query($sql,$db);
} // end while

$sql="DELETE FROM data_ventas WHERE id_venta = $id";
$rs=mysql_query($sql,$db);

$sql="DELETE FROM data_detalle_ventas WHERE id_venta = $id";
$rs=mysql_query($sql,$db);

header("Location: detallado.php");

?>