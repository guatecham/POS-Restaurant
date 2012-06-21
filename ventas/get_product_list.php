<?php
require_once "../utilidades/conex.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "SELECT DISTINCT producto AS producto FROM inf_carta WHERE producto LIKE '%$q%' OR codigoDeBarras LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = utf8_encode($rs['producto']);
	echo "$cname\n";
}
?>