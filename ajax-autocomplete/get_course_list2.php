<?php
require_once "config.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT producto as producto, id_producto from inf_carta where producto LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cid = $rs['id_producto'];
	$cname = $rs['producto'];
	echo "$cname|$cid\n";
}
?><p><font color="#000000">recognize </font></p>
