<?php

//@	$db = mysql_connect('localhost', 'root', 'root');


@	$db = mysql_connect('localhost', 'geempres_pere', 'PEREgrino2012&');


if (!$db)
{
	echo 'Error: No se puede conectar a la base de datos. Intentelo mas tarde. ---';
	exit;
}

mysql_select_db("geempres_peregrino");

date_default_timezone_set("America/Tegucigalpa");
//session_start(); 

?>