<?php
include ('../../utilidades/conex.php');


$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "SELECT DISTINCT cuenta FROM data_gastos WHERE cuenta LIKE '%$q%' ORDER BY cuenta";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_object($rsd)) {
	$cname = utf8_encode($rs->cuenta);
	echo "$cname\n";
	//echo $sql;
}

?>