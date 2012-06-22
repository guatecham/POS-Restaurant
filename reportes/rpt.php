  <?php
function reporte($desdeSQL, $hastaSQL) {
@	$db = mysql_connect('localhost', 'geempres_pere', 'PEREgrino2012&');
if (!$db)
{
	echo 'Error: No se puede conectar a la base de datos. Intentelo mas tarde. ---';
	exit;
}
mysql_select_db("geempres_peregrino");

$a='';
$sql="SELECT SUM(total) FROM data_ventas WHERE fecha BETWEEN '$desdeSQL' AND '$hastaSQL' AND vale=''";
$resultC=mysql_query($sql,$db);
$rowC=mysql_fetch_array($resultC);
$total = $rowC["SUM(total)"];

$t=number_format($total,2);

$a.='<div class="prefix_4 grid_4 sufix_4" id="totalBig" align="center">
<div class="ui-widget">
    <div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
        <p><strong>Total:</strong>Q.'.$t.'</p>
    </div>
</div>
</div>
<div class="clear"></div>
<p>&nbsp;</p>
<div class="prefix_2 grid_1 title_small alpha"><strong>Cantidad</strong></div>
<div class="grid_5 title_small"><strong>Producto</strong></div>
<div class="grid_2 title_small omega"><strong>Sub-total</strong></div>
<div class="clear"></div>';

$sql="SELECT * FROM inf_tipos";
$rs=mysql_query($sql,$db);
while ($row = mysql_fetch_object($rs)) {
	
	// Calculo 

$a.='<div class="grid_2 alpha title_small"><strong>'.$row->tipo.'</strong></div><div class="clear"></div>';

 $total_bruto=0;
 $sql="SELECT * FROM inf_carta WHERE subtipo IN (SELECT id_subtipo FROM inf_subtipos WHERE tipo = $row->id_tipo)";
 $rsB=mysql_query($sql,$db);
 $i=1;
 $total=0;
 while ($rowB=mysql_fetch_object($rsB)) {
 	$cantidad=0;
	$sql="SELECT * FROM data_detalle_ventas INNER JOIN data_ventas ON data_detalle_ventas.id_venta=data_ventas.id_venta WHERE data_detalle_ventas.id_producto=$rowB->id_producto AND data_ventas.fecha BETWEEN '$desdeSQL' AND '$hastaSQL' AND vale=''";
	$rsC=mysql_query($sql,$db);
	while ($rowC=mysql_fetch_object($rsC)) {
		$cantidad+=$rowC->cantidad;
	} // end while
	$subtotal=$rowB->precio*$cantidad;
	$total+=$subtotal;
	if ($cantidad > 0) {
		$i++;
$a.='<div class="grid_2 alpha title_small">&nbsp;</div>
<div class="grid_1" align="center">'.$cantidad.'</div>
<div class="grid_5">'.utf8_encode($rowB->producto).'</div>
<div class="grid_2 omega">Q.'.number_format($subtotal,"2").'</div>
<div class="clear"></div>
';

$total_bruto=$total;
 	} // end if (cantidad > 0)
 } // end while

if ($total_bruto > 0) {

$a.='<div class="prefix_7 grid_2" align="right" ><hr></div>
<div class="clear"></div>
<div class="prefix_4 grid_4 title_small alpha" align="right" ><strong>Total '.$row->tipo.'</strong></div>
<div class="grid_2 title_small omega" align="left"><strong>Q.'.number_format($total_bruto,2).'</strong> </div>
<div class="clear"></div>
<p>&nbsp;</p>
<hr>';

} // end if (total_bruto)
} // end while


/* ****************** */
// Mostrar los vales *//
/* ****************** */


$sql="SELECT SUM(total) FROM data_ventas WHERE vale <> '' AND fecha BETWEEN '$desdeSQL' AND '$hastaSQL'";
$rs=mysql_query($sql,$db);
$row=mysql_fetch_array($rs);

$a.='<br><hr><p class="title">VALES Q.'.number_format($row["SUM(total)"],2).'</p>';
$sql="SELECT DISTINCT vale FROM data_ventas WHERE vale <>''";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) {

	
$a.='<div class="grid_2 alpha title_small"><strong>'.$row->vale.'</strong></div><div class="clear"></div>';

$total=0;
$sql="SELECT * FROM data_ventas WHERE vale LIKE '$row->vale'";
$rsB=mysql_query($sql,$db);
while ($rowB=mysql_fetch_object($rsB)) {
	$sql="SELECT * FROM data_detalle_ventas INNER JOIN inf_carta ON data_detalle_ventas.id_producto = inf_carta.id_producto WHERE id_venta = $rowB->id_venta";
	$rsC=mysql_query($sql,$db);
	while ($rowC=mysql_fetch_object($rsC)) {
	
		$subtotal=$rowC->precio_venta * $rowC->cantidad;
		$total+=$subtotal;
		
		$a.='<div class="grid_2 alpha title_small">&nbsp;</div>
<div class="grid_1" align="center">'.$rowC->cantidad.'</div>
<div class="grid_5">'.utf8_encode($rowC->producto).'</div>
<div class="grid_2 omega">Q.'.number_format($subtotal,"2").'</div>
<div class="clear"></div>
';
	}
} // end while

if ($total > 0) {

$a.='<div class="prefix_7 grid_2" align="right" ><hr></div>
<div class="clear"></div>
<div class="prefix_4 grid_4 title_small alpha" align="right" ><strong>Total '.$row->vale.'</strong></div>
<div class="grid_2 title_small omega" align="left"><strong>Q.'.number_format($total,2).'</strong> </div>
<div class="clear"></div>
<p>&nbsp;</p>
<hr>';

} // end if (total_bruto)


} // end while


return $a;
} // end function
?>


