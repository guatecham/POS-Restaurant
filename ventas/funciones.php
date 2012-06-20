<?php

function show_mesas($n, $m) {

@	$db = mysql_connect('localhost', 'geempres_pere', 'PEREgrino2012&');
if (!$db)
{
	echo 'Error: No se puede conectar a la base de datos. Intentelo mas tarde. ---';
	exit;
}
mysql_select_db("geempres_peregrino");
	
	
// Comienza la funcion	
$a='';	
$ao = '';
for ($i=1;$i<=$n;$i++) {
	
	$estado="libre";
	$total="";
	$sql="SELECT * FROM tmp_ventas WHERE mesa = $i";
	$rs=mysql_query($sql,$db);
	if (mysql_num_rows($rs) > 0) {
		
			$sql="SELECT SUM(cantidad * precio) FROM tmp_ventas INNER JOIN inf_carta ON tmp_ventas.producto = id_producto where mesa = $i";
			$rs_aux=mysql_query($sql,$db);
			$row_aux=mysql_fetch_array($rs_aux);
			$t=$row_aux["SUM(cantidad * precio)"];
			$estado = "ocupada";
		if ($i == $m) {
			$total = '<div align="right" id="total2">Q.'.number_format($t,2).'</div>';
		} else {
			$total = "";
		}
	}
		
	if ($i == 1) $ao = ' alpha';
	if ($i % 2 == 0) $ao= ' omega';
	
	if ($m == $i) {
		$imagen = "sel_mesa$i";
	} else {
		$imagen = "mesa$i";
	}

	$a.='<div class="grid_1'.$ao.'" id="'.$estado.'"><a href="'.$_SERVER['PHP_SELF'].'?mesa='.$i.'"><img src="../images/'.$imagen.'.jpg" width="60" height="50" /></a>'.$total.'</div>';

	if ($i % 2 == 0) {
		$ao=' alpha'; 
		$a.='<div class="clear"></div><p>&nbsp;</p>';
	} // end if
} // end for

return $a;
} // end function

function show_fecha($f) {

	$aux = explode ("-",$f);
	$fecha = $aux[2]."/".$aux[1]."/".$aux[0];

	return $fecha;
}

function fecha2database($f) {
	
	$aux = explode ("/",$f);
	$fecha = $aux[2]."-".$aux[0]."-".$aux[1];

	return $fecha;

}

?>
