<p>&nbsp;</p>
<div class="ui-state-highlight ui-corner-all">
<h2 class="title" align="center">Detalle</h2>
<?php
$total=0;
$sql="SELECT * FROM inf_tipos";
$rsMain=mysql_query($sql,$db);
while ($rowMain=mysql_fetch_object($rsMain)) {

/* Calculo del subtotal del tipo */
$sql="SELECT SUM(cantidad * precio) FROM tmp_ventas INNER JOIN inf_carta ON tmp_ventas.producto = inf_carta.id_producto WHERE subtipo IN (SELECT id_subtipo FROM inf_subtipos WHERE tipo = $rowMain->id_tipo) AND mesa = $mesa";
$rs=mysql_query($sql,$db);
$row=mysql_fetch_array($rs);
$subtotal = $row["SUM(cantidad * precio)"];
/* Fin de calculo del subtotal de tipos */

$sql="SELECT * FROM tmp_ventas INNER JOIN inf_carta ON tmp_ventas.producto = inf_carta.id_producto WHERE subtipo IN (SELECT id_subtipo FROM inf_subtipos WHERE tipo = $rowMain->id_tipo) AND mesa = $mesa";
$rs=mysql_query($sql,$db);
if (mysql_num_rows($rs) > 0) {	
?>
<table width="95%" border="0" align="right" cellpadding="0" cellspacing="1">
<?php
while ($row=mysql_fetch_object($rs)) {
?>					  
        <tr class="detalleCuenta">
        <td width="10%"><a href="minus_producto.php?mesa=<?php echo $mesa ?>&amp;producto=<?php echo $row->id_producto ?>&amp;tipo=<?php echo $tipo ?>">
        		<ul id="icons" class="ui-widget ui-helper-clearfix">
                <li class="ui-state-default ui-corner-all" title=".ui-icon-icon-trash-1-w"><span class="ui-icon ui-icon-trash"></span>
                </li></ul></a>
        </td>
        <td width="5%" align="center"><?php echo $row->cantidad ?></td>
        <td width="70%" align="left"><?php echo utf8_encode($row->producto) ?></td>
        <td width="15%" align="right"><strong><?php echo "Q. ".$row->cantidad * $row->precio ?></strong></td>
      </tr>                      
<?php
} // end while
$total+=$subtotal;
?>  
  </table>
<p id="total"><?php echo "$rowMain->tipo: Q.".number_format($subtotal,2) ?></p>
<?php  
} // end if
} // end while (tipos)
?>
</div>    


<?php
$codigoError = "";
if (isset($_REQUEST["codigo"])) {
	$codigoError = $_REQUEST["codigo"];
}
if ($codigoError != "") { ?>
	<div class="ui-widget">
			<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
				<br>
				<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
				<strong><?php echo "Producto: $codigoError" ?></strong> No ha sido encontrado en el sistema.</p>
			</div>
		</div>
	<p>&nbsp;</p>
<?php
}

$producto = "";
if (isset($_REQUEST["producto"])) {
	$producto = $_REQUEST["producto"];
}
if ($producto != "") { 
	$sql="SELECT * FROM inf_carta WHERE id_producto = $producto";
	$rs=mysql_query($sql,$db);
	$row=mysql_fetch_object($rs);
?>
		<div class="ui-widget">
			<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
				<br>
				<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
				<strong><?php echo utf8_encode($row->producto) ?></strong> Ingresado correctamente</p>
			</div>
		</div>
	<p>&nbsp;</p>
<?php
}
?>


