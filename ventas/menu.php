<div class="grid_4" align="center">
<?php 
	$sql="SELECT * FROM inf_tipos";
	$rs=mysql_query($sql,$db);
	while ($row=mysql_fetch_object($rs)) { ?>
		<a href="<?php echo $_SERVER["PHP_SELF"]."?mesa=$mesa&tipo=$row->id_tipo" ?>"><button id="button"><?php echo $row->tipo; ?></button></a>
<?php
	}
?>
</div>
<div class="clear_grid"></div>
<p>&nbsp;</p>
	<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;" align="center">
	<form id="frm_buscar" name="frm_buscar" method="post" action="barcode.php" tabindex="1" id="codigoBarra">
				
				<ul id="icons" class="ui-widget ui-helper-clearfix"><strong>Buscar</strong> <input type="text" id="codigoBarras" name="codigoBarras" onchange="document.getElementById('frm_buscar').sumbit()" size="15">				
				<li class="ui-state-default ui-corner-all" title=".ui-icon-search"><span class="ui-icon ui-icon-search"></span></li>
				</ul>
				<input type="hidden" id="mesa" name="mesa" value="<?php echo $mesa ?>">
	</form>			
</div>

<div class="clear"></div>
<p>&nbsp;</p>
<div class="grid_4" id="accordion">

<?php
$sql="SELECT * FROM inf_subtipos WHERE tipo = $tipo";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) {
?>			
			<div>
				
				<h3><a href="#"><?php echo $row->subtipo ?></a></a></h3>
				<div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<?php
$sql="SELECT * FROM inf_carta WHERE subtipo = $row->id_subtipo ORDER BY producto";
$rsB=mysql_query($sql,$db);
while ($rowB=mysql_fetch_object ($rsB)) {
	$aux = "";
	$aux2 = "";
	if ($rowB->inventariado == 1) {
		$sql="SELECT SUM(cantidad) FROM tmp_ventas WHERE producto = $rowB->id_producto";
		$rsC=mysql_query($sql,$db);
		$rowC=mysql_fetch_array($rsC);
		$venta = $rowC["SUM(cantidad)"];						
		$bodega = $rowB->existencia;
		$existencia = $bodega - $venta;						
		$aux = '<img src="../images/check4.jpg" alt="" width="16" height="16" border="0" />';
			$aux2 = " $existencia";	
	
		if ($existencia < $rowB->reorden) {
			$aux = '<img src="../images/alerta.png" alt="" width="18" height="18" border="0" />';
			}
		if ($existencia <= 0) {
			$aux = '<img src="../images/alerta-icono-6332-96.png" alt="" width="20" height="20" border="0" />';
			}
	}
?>
					<tr>
						<td>
							<ul id="icons" class="ui-widget ui-helper-clearfix">
                          	<li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturnthick-1-w">                          	
                          	<a href="index.php?mesa=<?php echo $mesa ?>&tipo=<?php echo $tipo ?>&producto=<?php echo $rowB->id_producto ?>&multiple=1"><span class="ui-icon ui-icon-newwin"></span></a></li>
                          </ul>
                        </td>
						<td>&nbsp;<a href="add_producto.php?mesa=<?php echo $mesa ?>&amp;producto=<?php echo $rowB->id_producto ?>&amp;tipo=<?php echo $tipo ?>"><?php echo utf8_encode($rowB->producto)?></a></td>
						<td><?php echo $aux2 ?>&nbsp;</td>
						<td><?php echo $aux ?></td>
					</tr>
<?php
} // end while
?>					
					</table>
				</div>
			
			</div>
<?php
} // end while
?>			
</div>		<!- grid_4 !>