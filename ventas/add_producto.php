<?php
include ("../utilidades/conex.php");
$mesa=$_REQUEST["mesa"];
$producto=$_REQUEST["producto"];
$hora=date("G:i");

$id_producto =0;
if (strpos($producto,":") > 0) {
	$id_producto = substr($producto,strpos($producto,":")+1);
} else {
	$codigo	= substr($producto,0,strpos($producto,":")-1);
	if ($codigo != "") {
		$sql="SELECT id_producto FROM inf_carta WHERE codigoDeBarras = '$codigo'";
		$rs=mysql_query($sql,$db);
		if (mysql_num_rows($rs) > 0) {
			$row=mysql_fetch_object($rs);
			$id_producto = $row->id_producto;
		} 
	} 	
}

$sql="SELECT * FROM inf_carta WHERE id_producto = $id_producto";
$rs=mysql_query($sql,$db);
if (mysql_num_rows($rs) > 0) {
	$sql="SELECT * FROM tmp_ventas WHERE mesa=$mesa AND producto=$id_producto";	
	$result=mysql_query($sql,$db);
	if (mysql_num_rows($result) > 0) { // si ya hay registros para este producto
		$row=mysql_fetch_array($result);
		$c=$row["cantidad"];
		$c++;
		$sql="UPDATE tmp_ventas SET cantidad=$c WHERE mesa=$mesa AND producto=$id_producto";
	} else { // el producto todavia no existe en la base de datos temporal 
		$sql="INSERT INTO tmp_ventas (mesa, cantidad, producto,hora) VALUES ($mesa, 1, $id_producto,'$hora')";
	}
	$result=mysql_query($sql);

	header("Location: index.php?producto=$id_producto&mesa=$mesa");

} else {

	header("Location: index.php?codigo='$producto'&mesa=$mesa");	
}	
?>