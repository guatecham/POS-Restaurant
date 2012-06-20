  <?php
function detalle($desdeSQL, $hastaSQL) {
@	$db = mysql_connect('localhost', 'geempres_pere', 'PEREgrino2012&');
if (!$db)
{
	echo 'Error: No se puede conectar a la base de datos. Intentelo mas tarde. ---';
	exit;
}
mysql_select_db("geempres_peregrino");

$a='';
$sql="SELECT SUM(total) FROM data_ventas WHERE fecha BETWEEN '$desdeSQL' AND '$hastaSQL'";
$resultC=mysql_query($sql,$db);
$rowC=mysql_fetch_array($resultC);
$total = $rowC["SUM(total)"];


$a.='<div class="prefix_4 grid_4 sufix_4" id="totalBig" align="center">
<div class="ui-widget">
    <div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
        <p><strong>Total:</strong>Q.'.number_format($total,2).'</p>
    </div>
</div>
</div>
<div class="clear"></div>
<p>&nbsp;</p>
<div class="prefix_1 grid_1 alpha" align="right">&nbsp;</div>
<div class="grid_2 title_small alpha"><strong>Fecha</strong></div>
<div class="grid_1 title_small" align="left"><strong>Hora</strong></div>
<div class="grid_2 title_small omega" align="left"><strong>Venta</strong></div>
<div class="grid_1">&nbsp;</div>
<div class="clear"></div>';


$sql="SELECT * FROM inf_tipos";
$rs=mysql_query($sql,$db);
while ($row = mysql_fetch_object($rs)) {
	
	$total_bruto=0; 

$a.='<div class="grid_2 alpha title_small"><strong>'.$row->tipo.'</strong></div>
<div class="clear"></div>';

  $aux1="SELECT id_producto FROM inf_carta WHERE subtipo = $row->id_tipo";
  $aux2="SELECT id_venta FROM `data_detalle_ventas` WHERE id_producto IN ($aux1)";
  $sql="SELECT * FROM `data_ventas` WHERE id_venta IN ($aux2) AND fecha BETWEEN '$desdeSQL' AND '$hastaSQL' ORDER BY id_venta DESC";
  $rsB=mysql_query($sql,$db);
  while ($rowB=mysql_fetch_object($rsB)) {
      $total_bruto += $rowB->total;
            
      $a.='<div class="prefix_1 grid_1 alpha"><a href="detallado.php?id_venta='.$rowB->id_venta.'"><ul id="icons" class="ui-widget ui-helper-clearfix">
                          	<li class="ui-state-default ui-corner-all" title=".ui-icon-comment-1-w"><span class="ui-icon ui-icon-comment"></li></ul></span></a></div>
<div class="grid_2" align="left">'.$rowB->fecha.'</div>
<div class="grid_1" align="left">'.$rowB->hora_cuenta.'</div>
<div class="grid_1" align="left">Q.'.number_format($rowB->total,"2").'</div>
<div class="grid_1 omega"><a href="#" onclick="validarBorrar(\''.$rowB->id_venta.'\',\''.$rowB->fecha.'\',\''.$rowB->hora_cuenta.'\',\'Q.'.number_format($rowB->total,2).'\')"><ul id="icons" class="ui-widget ui-helper-clearfix">
                          	<li class="ui-state-default ui-corner-all" title=".ui-icon-icon-trash-1-w"><span class="ui-icon ui-icon-trash"></span></li></ul></a></div>
<div class="clear"></div>
';
  } // end while

  if ($total_bruto > 0) {

     $a.='<div class="prefix_4 grid_2" align="right" ><hr></div>
<div class="clear"></div>
<div class="prefix_2 grid_3 title_small alpha" align="right" ><strong>Total '.$row->tipo.'</strong></div>
<div class="grid_2 title_small omega" align="left"><strong>Q.'.number_format($total_bruto,2).'</strong> </div>
<div class="clear"></div>
<p>&nbsp;</p>
<hr>';

      } // end if (total_bruto)	
} // end while  



return $a;
} // end function
?>


