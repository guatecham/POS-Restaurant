<?php
include ("../utilidades/conex.php");

$mesa=$_REQUEST["mesa"];
$total=$_REQUEST["total"];
$valea=$_REQUEST["valea"];

$fecha=date("Y-m-d");
$hora_cuenta=date("G:i");

/*$usuario = $_SESSION["usuario_actual"];
$nombre_usuario	= $_SESSION["nombre_usuario"]; */
$comentarios	= "Venta";

$sql="INSERT INTO data_ventas (mesa, total, fecha, hora_cuenta, vale) VALUES ($mesa, '$total', '$fecha', '$hora_cuenta', '$valea')";
$result=mysql_query($sql,$db);


$id_venta=mysql_insert_id();
$sql="SELECT * FROM tmp_ventas WHERE mesa=$mesa";
$result=mysql_query($sql);
while ($row=mysql_fetch_object($result)) {
	$cantidad=$row->cantidad;
	$producto=$row->producto;
	$hora_pedido=$row->hora;
	
	$sql="SELECT * FROM inf_carta WHERE id_producto=$producto";
	$resultB=mysql_query($sql,$db);
	$rowB=mysql_fetch_array($resultB);
	$precio_venta=$rowB["precio"];
	if ($rowB["inventariado"] == 1) {
	 	$existencia=$rowB["existencia"];
		$nueva_existencia = $existencia - $cantidad;
		$sql="UPDATE inf_carta SET existencia = $nueva_existencia WHERE id_producto = $producto";
		$resultB=mysql_query($sql,$db);
		
		// Agregar registro (historial) al inventario

			$sql="INSERT INTO data_inventario SET ";
			$sql.="fecha = '$fecha', ";
			$sql.="producto = $producto, ";
			$sql.="cantidad = $cantidad, ";
			$sql.="operacion = 2, ";
			$sql.="comentarios = '$comentarios'";
			$resultAux=mysql_query($sql,$db);

		// *** FIN - Agregar registro (historial) al inventario **		
	}	
	
	$sql="INSERT INTO data_detalle_ventas (id_venta, id_producto, precio_venta, cantidad, hora_pedido) VALUES ($id_venta, $producto, $precio_venta, $cantidad,'$hora_pedido')";
	$resultB=mysql_query($sql,$db);

} // end while

$sql="DELETE FROM tmp_mesas WHERE mesa=$mesa";
$result=mysql_query($sql,$db);

$sql="DELETE FROM tmp_ventas WHERE mesa=$mesa";
$result=mysql_query($sql,$db);

header("Location: index.php?mesa=$mesa");

?>