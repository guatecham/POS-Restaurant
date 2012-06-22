<?php
require_once "../utilidades/conex.php";

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "SELECT DISTINCT vale AS vale FROM data_ventas WHERE vale LIKE '%$q%' ORDER BY vale";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_object($rsd)) {
	$cname = utf8_encode($rs->vale);
	echo "$cname\n";
}

?>