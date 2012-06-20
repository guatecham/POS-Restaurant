<?php
include ("../utilidades/conex.php");
$mesa=$_GET["mesa"];
$producto=$_GET["producto"];
$tipo=$_GET["tipo"];

$sql="SELECT * FROM tmp_ventas WHERE mesa=$mesa AND producto=$producto";
$result=mysql_query($sql,$db);
$row=mysql_fetch_array($result);
if ($row["cantidad"] == 1) { // si es el unico registro que queda
	$sql="DELETE FROM tmp_ventas WHERE mesa=$mesa AND producto=$producto";
} else { // el producto todavia no existe en la base de datos temporal 	
	$c=$row["cantidad"];
	$c--;
	$sql="UPDATE tmp_ventas SET cantidad=$c WHERE mesa=$mesa AND producto=$producto";
} // end if-else 
$result=mysql_query($sql);


header("Location: index.php?mesa=$mesa&tipo=$tipo");

?>
 