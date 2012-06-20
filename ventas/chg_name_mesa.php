<?php 

include ("../utilidades/conex.php");

$cliente = $_REQUEST["cliente"];
$mesa = $_REQUEST["mesa"];

$sql="SELECT * FROM tmp_mesas WHERE mesa = $mesa";
$rs=mysql_query($sql,$db);

if (mysql_num_rows($rs) > 0) {
	$sql="UPDATE tmp_mesas SET nombre = '$cliente' WHERE mesa = $mesa";
} else {
	$sql="INSERT INTO tmp_mesas SET nombre = '$cliente', mesa = $mesa";
}

$rs=mysql_query($sql,$db);

header("location:index.php?mesa=$mesa");

?>