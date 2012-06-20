<?php
include ("../utilidades/conex.php");
$mesa=$_REQUEST["mesa"];

$sql="DELETE FROM tmp_mesas WHERE mesa=$mesa";
$result=mysql_query($sql,$db);

$sql="DELETE FROM tmp_ventas WHERE mesa=$mesa";
$result=mysql_query($sql,$db);

header("Location: index.php?mesa=$mesa");

?>