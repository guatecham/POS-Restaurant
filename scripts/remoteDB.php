<?php

//@	$db = mysql_connect('localhost', 'root', 'root');


/* IP Autorizada 190.149.1.243 */
$db = mysql_connect('74.220.215.85', 'geempres_pere', 'PEREgrino2012&');


if (!$db)
{
	echo 'Error: No se puede conectar a la base de datos. Intentelo mas tarde.';
	exit;
}

mysql_select_db("geempres_peregrino");

date_default_timezone_set("America/Tegucigalpa");
session_start(); 

echo "LISTADO DE PRODUCTOS<br><br>";
$sql="SELECT * FROM inf_carta ORDER BY id_producto";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) {
	echo $row->producto."<br>";
}

?>