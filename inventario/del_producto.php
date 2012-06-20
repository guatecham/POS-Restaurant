<?php
include ('../utilidades/conex.php'); 

$id_producto = $_REQUEST["id_producto"];

$sql="DELETE FROM inf_carta WHERE id_producto = $id_producto";
$rs=mysql_query($sql,$db);

header("Location: index.php");

?>