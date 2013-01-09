<?php
$producto=$_REQUEST["producto"];
if (strpos($producto,":") > 0) {
	$id_producto = substr($producto,strpos($producto,":")+1);
}

header("Location: index.php?producto=$id_producto");
?>