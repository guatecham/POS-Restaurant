<div class="grid_12 align=center title_small ui-state-highlight ui-corner-all">
<br>
<?php
$sql="SELECT SUM(cantidad) FROM data_gastos WHERE fecha='".date('Y-m-d')."'";
$rs=mysql_query($sql,$db);
$row=mysql_fetch_array($rs);
$totalDia = $row["SUM(cantidad)"];
?>
<div class="prefix_6 grid_4 alpha" align="right">Gastos en el dia:</div>
<div class="grid_2 title_small omega"><strong><?php echo " Q.".number_format($totalDia,2) ?></strong></div>
<div class="clear"></div>
<br>
<!- Tabla !>
<div class="prefix_1 grid_1 alpha title_small">Fecha</div>
<div class="grid_3 title_small">Cuenta</div>
<div class="grid_2 title_small">Cantidad</div>
<div class="grid_3 title_small">Descripcion</div>
<div class="grid_1 omega title_small" align="center">Factura</div>
<div class="clear"></div>
<div class="prefix_1 grid_10"><hr></div>
<div class="clear"></div>
<?php
$sql="SELECT * FROM data_gastos ORDER BY fecha DESC, id_gasto DESC LIMIT 0,10";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) {
	if ($row->cuenta == "") {
		$cuenta = "&nbsp;";
	} else {
		$cuenta = $row->cuenta;
	}
	
	if ($row->descripcion == "") {
		$descripcion = "&nbsp;";
	} else {
		$descripcion = $row->descripcion;
	}

	$factura="";
	if ($row->factura == 1) {
		$factura = '<img src="../images/asterisk.png" width=8 height=8>';
	} 	
		
 ?>
<div class="prefix_1 grid_1 alpha"><?php echo show_fecha($row->fecha); ?></div>
<div class="grid_3"><?php echo "$cuenta"; ?></div>
<div class="grid_2"><?php echo "Q. ".number_format($row->cantidad,2); ?></div>
<div class="grid_3"><?php echo "$descripcion"; ?></div>
<div class="grid_1 omega " align="center"><?php echo $factura ?></div>
<div class="clear"></div>
<div class="prefix_1 grid_10"><hr></div>
<div class="clear"></div>
<?php
}
?>
<p>&nbsp;</p>
</div>