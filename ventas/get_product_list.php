<?php
require_once "../utilidades/conex.php";

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "SELECT DISTINCT reorden, inventariado, existencia, id_producto, producto AS producto FROM inf_carta WHERE producto LIKE '%$q%' OR codigoDeBarras LIKE '%$q%' ORDER BY producto";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_object($rsd)) {
	// Revisa la existencia y el icono correspondiente
	$aux = "";
	$aux2 = "";
	if ($rs->inventariado == 1) {
		$sql="SELECT SUM(cantidad) FROM tmp_ventas WHERE producto = $rs->id_producto";
		$rsC=mysql_query($sql,$db);
		$rowC=mysql_fetch_array($rsC);
		$venta = $rowC["SUM(cantidad)"];						
		$bodega = $rs->existencia;
		$existencia = $bodega - $venta;						
		$aux = '<img src="../images/check4.jpg" alt="" width="16" height="16" border="0" />';
			$aux2 = " $existencia - ";	
	
		if ($existencia < $rs->reorden) {
			$aux = '<img src="../images/alerta.png" alt="" width="18" height="18" border="0" />';
			}
		if ($existencia <= 0) {
			$aux = '<img src="../images/alerta-icono-6332-96.png" alt="" width="20" height="20" border="0" />';
			}
	}
	// Fin de Revisa la existencia y el icono correspondiente


	//$cname = $aux.$aux2.utf8_encode($rs->producto)." <span class='small_id'>:".$rs->id_producto."</span>";
	$cname = utf8_encode($rs->producto)." :".$rs->id_producto;
	echo "$cname\n";
}

?>