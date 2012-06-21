<br>
<?php
$codigoError = "";
if (isset($_REQUEST["codigo"])) {
	$codigoError = $_REQUEST["codigo"];
}
if ($codigoError != "") { ?>
	<div class="grid_6">
	<div class="ui-widget">
			<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
				<br>
				<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
				<strong><?php echo "Producto: $codigoError" ?></strong> No ha sido encontrado en el sistema.</p>
			</div>
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
	<div class="grid_6">
		<div class="ui-widget">
			<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
				<br>
				<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
				<strong><?php echo utf8_encode($row->producto) ?></strong> Ingresado correctamente</p>
			</div>
		</div>
	</div>		
	<p>&nbsp;</p>
<?php
}
?>

<div class="grid_6 ui-state-highlight ui-corner-all">
<h2 class="title" align="center">Detalle</h2>
<?php

$total=0;
$sql="SELECT * FROM inf_tipos";
$rsMain=mysql_query($sql,$db);
while ($rowMain=mysql_fetch_object($rsMain)) {

$sql="SELECT SUM(cantidad * precio) FROM tmp_ventas INNER JOIN inf_carta ON tmp_ventas.producto = inf_carta.id_producto WHERE subtipo IN (SELECT id_subtipo FROM inf_subtipos WHERE tipo = $rowMain->id_tipo) AND mesa = $mesa";
$rs=mysql_query($sql,$db);
$row=mysql_fetch_array($rs);
$subtotal = $row["SUM(cantidad * precio)"];
$sql="SELECT * FROM tmp_ventas INNER JOIN inf_carta ON tmp_ventas.producto = inf_carta.id_producto WHERE subtipo IN (SELECT id_subtipo FROM inf_subtipos WHERE tipo = $rowMain->id_tipo) AND mesa = $mesa";
$rs=mysql_query($sql,$db);
if (mysql_num_rows($rs) > 0) {	
?>
<table width="90%" border="0" align="right" cellpadding="0" cellspacing="1">
<?php
while ($row=mysql_fetch_object($rs)) {
?>					  
        <tr class="detalleCuenta">
        <td width="10%"><a href="minus_producto.php?mesa=<?php echo $mesa ?>&amp;producto=<?php echo $row->id_producto ?>&amp;tipo=<?php echo $tipo ?>">
        		<ul id="icons" class="ui-widget ui-helper-clearfix">
                <li class="ui-state-default ui-corner-all" title=".ui-icon-icon-trash-1-w"><span class="ui-icon ui-icon-trash"></span>
                </li></ul></a>
        </td>
        <td width="15%" align="center"><?php echo $row->cantidad ?></td>
        <td width="50%" align="left"><?php echo utf8_encode($row->producto) ?></td>
        <td width="25%" align="right"><strong><?php echo "Q. ".$row->cantidad * $row->precio ?></strong></td>
      </tr>                      
<?php
} // end while
$total+=$subtotal;
?>  
  </table>
  
<div class="grid_5 sufix_1"><p id="total"><?php echo "$rowMain->tipo: Q.".number_format($subtotal,2) ?></p></div>

  
<?php  
} // end if
} // end while (tipos)
?>

</div>    
<div class="clear"></div>
<br>
<div class="prefix_2 grid_4">
<?php
if ($total > 0) {
?>
 <div class="ui-state-error ui-corner-all">
 	<p id="totalBig"><?php echo "Total: Q.".number_format($total,2); ?></p>
 </div>
</div>
<div class="clear"></div>
<p>&nbsp;</p>
<div class="grid_6 ui-state-highlight ui-corner-all">
<p>&nbsp;</p>
<form name="myform" action="pagototal.php">  
     <!- Pago !>          
     <div class="grid_3 alpha title_small" align="right">Paga con Q.</div>
     <div class="grid_3 omega">
         <input name="pagaCon" type="text" id="pagaCon" onchange="calcularvuelto(<?php echo $total ?>)" value="<?php echo $total ?>" size="4" maxlength="6" />
     </div>
     <div class="clear"></div>
	<!- Vuelto !>     
     <div class="grid_3 alpha title_small" align="right">Vuelto Q.</div>
     <div class="grid_3 omega">
         <input name="vuelto" type="text" class="Estilo14" id="vuelto" size="4" maxlength="6" disabled="disabled" />
     </div>
         <input name="mesa" type="hidden" id="mesa" value="<?php echo $mesa ?>" />
         <input name="total" type="hidden" id="total" value="<?php echo $total ?>" />
     <div class="clear"></div>
        <br>
	
	<!- Botones ->
     <div class="grid_3 alpha" align="right">
         <input type="button" value="Realizar pago" onclick="javascript: validarPago('<?php echo $total ?>');"/>
     </div>
<?php
/*
     <div class="grid_3 omega" align="center">
     	<a href="#" onclick="confirmar_eliminar(<?php echo $mesa ?>)"><img src="../images/eliminar.png" alt="Eliminar" width="16" height="16" border="0" /></a>
     	<a href="#" onclick="window.open('ordencocina.php?mesa=<?php echo $mesa ?>')"><img src="../images/Unknown.jpeg" alt="" width="22" height="22" border="0" /></a>
     	<a href="#" onclick="window.open('cuentaplain.php?mesa=<?php echo $mesa ?>')"><img src="../images/print.jpg" alt="" width="22" height="22" border="0" /></a>
     </div>
 */ ?>
     <div class="clear"></div>
     <br>
</form>   

<?php
} // end if
?>                    