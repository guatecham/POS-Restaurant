<?php
if (isset($_REQUEST["producto"])) {
	$id_producto = $_REQUEST["producto"];
	$sql="SELECT * FROM inf_carta WHERE id_producto = $id_producto";
	$result=mysql_query($sql,$db);
	$row=mysql_fetch_object($result);
	$show_producto	=$row->producto;
	$inventariado 	= $row->inventariado;
	$existencia		= $row->existencia;
	$recompra 		= $row->reorden;
	$subtipo 		= $row->subtipo;
	$precio			= $row->precio;
	$producto		= $row->producto;
	$codigo			= $row->codigoDeBarras;
	$provider		= $row->provider;
	
	$boton = "Modificar";
} else {
	$id_producto = 0;
	$show_producto = "[Nuevo Producto]";
	
	$inventariado = $recompra = $tipo = $precio	= $descripcion = $producto = $codigo = $provider = "";
	
	$boton = "Agregar";
}

?>
<div class="grid_7">
<ul id="icons" class="ui-widget ui-helper-clearfix">
<li class="ui-state-default ui-corner-all" title=".ui-icon-circlesmall-plus">
<a href="index.php">
<span class="ui-icon ui-icon-circle-plus"></span>Nuevo producto &nbsp;
</a>
</li>
</ul>
</div>
<div class="clear"></div>
<p>&nbsp;</p>
<div class="grid_7 ui-state-highlight ui-corner-all">
<br>
<!- Formulario izquierdo !>
<div class="grid_4 alpha">
	<div class="grid_4 title"><?php echo utf8_encode($show_producto) ?></div>
	<div class="clear"></div><br>
	<form id="frm_edicion" method="post" action="edit_producto.php">
	<div class="grid_2 alpha title_small" align="right"><img src="../images/check4.jpg" alt="" width="16" height="16" border="0" /> Inventariado</div><div class="grid_2 omega">
	<?php
				  if ($inventariado == 1) {
					  $aux = 'checked="checked"';
				  } else {
					  $aux = '';
				  }
				  ?><input name="inventariado" type="checkbox" id="inventariado" value="1" <?php echo $aux ?> />
</div>
	<div class="clear"></div><br>
<?php
if ($inventariado == 1) {
	$sql="SELECT SUM(cantidad) FROM tmp_ventas WHERE producto = $id_producto";
	$resultB=mysql_query($sql,$db);
	$rowB=mysql_fetch_array($resultB);
	$venta = $rowB["SUM(cantidad)"];						
	$bodega = $existencia;
	$existencia = $bodega - $venta;
?>
	<div class="grid_2 alpha title_small" align="right">Existencia</div><div class="grid_2 omega title_small cuadroResaltado">
	<?php echo "$existencia unidades" ?>
</div>
	<div class="clear"></div><br>
	
	<div class="grid_2 alpha title_small" align="right"><img src="../images/alerta.png" alt="" width="18" height="18" border="0" /> Recompra</div><div class="grid_2 omega"><input name="recompra" type="text" id="recompra" value="<?php echo $recompra ?>" size="3" maxlength="3" />
                  unidades <span class="obligatorio">*</span></div>
    <div class="clear"></div><br>
<?php
} // end if
?> 	


	<div class="grid_2 alpha title_small" align="right">Tipo</div><div class="grid_2 omega">
	<select name="subtipo" size="1" id="subtipo">
                    <?php
					$sql="SELECT * FROM inf_subtipos";
					$result=mysql_query($sql,$db);
					while ($row=mysql_fetch_object($result)) {
						if ($row->id_subtipo == $subtipo) {
							$aux = 'selected="selected"';
						} else {
							$aux = '';
						}
					?>
	                  <option value="<?php echo $row->id_subtipo ?>" <?php echo $aux ?>><?php echo $row->subtipo ?></option>
                    <?php
					} // end while
					?>  
                  </select></div>
	<div class="clear"></div><br>
	
	<div class="grid_2 alpha title_small" align="right">Precio Q.</div><div class="grid_2 omega">
		<input name="precio" type="text" id="precio" value="<?php echo $precio ?>" size="10" /><span class="obligatorio">*</span></div>
	<div class="clear"></div><br>
	
	
	<div class="grid_2 title_small" align="lef">Producto</div>
	<div class="clear"></div>
	<div class="grid_4">
		<input name="nombre" type="text" id="nombre" value="<?php echo utf8_encode($producto) ?>" size="32" /><span class="obligatorio">*</span></div>
	<div class="clear"></div><br>
	
	<div class="grid_2 title_small" align="left">Codigo de Barras</div>
	<div class="clear"></div>
	<div class="grid_4">
		<input name="codigo" type="text" id="codigo" value="<?php echo $codigo ?>" size="32" /></div>
	<div class="clear"></div><br>
	
	<div class="grid_2 title_small alpha" align="right">Proveedor</div>
	<div class="grid_2 omega">
	<?php
	if ($provider == 0) {
		$aux = 'selected="selected"';
	} else {
		$aux = '';
	}
	?>
		<select name="providers" id="providers">
			<option value="0" <?php echo $aux ?> >-------</option>
			<?php
			$sql="SELECT * FROM inf_providers ORDER by provider";
			$rs=mysql_query($sql,$db);
			while ($row=mysql_fetch_object($rs)) { 
				if ($row->id_provider == $provider) {
					$aux = 'selected="selected"';
				} else {
					$aux = '';
				}
			?>
				<option value="<?php echo $row->id_provider ?>" <?php echo $aux ?>><?php echo $row->provider ?></option>				
			<?php
			}
			?>
		</select>
	</div>	
	<div class="clear"></div><br>	
	<div class="grid_2"><span class="obligatorio">* Campos obligatorios</span></div>
	<div class="clear"></div><br>
	
	<div class="grid_2" align="right">
	<?php if ($inventariado == 0) {	?> <input name="recompra" type="hidden" id="recompra" value="0" /><?php } // end if ?>
    <input name="id_producto" type="hidden" id="id_producto" value="<?php echo $id_producto ?>" />
    <input type="button" name="button" id="button" value="<?php echo $boton ?>" onclick="validar_edicion('<?php echo $recompra ?>','<?php echo $precio ?>','<?php echo $producto ?>')" />	
	<input type="hidden" name="pagina" value="<?php echo $pagina ?>">
	</div>
	<div class="clear"></div>
<?php
$sql="SELECT * FROM data_detalle_ventas WHERE id_producto = $id_producto";
$rs=mysql_query($sql,$db);
if (mysql_num_rows($rs) == 0 && $id_producto != 0) {
?>	
	<div class="prefix_3 grid_1" align="right">
	<ul id="icons" class="ui-widget ui-helper-clearfix">
<li class="ui-state-default ui-corner-all" title=".ui-icon-trash">
<a href="#" onclick="validar_eliminar('<?php echo $id_producto ?>','<?php echo $producto ?>')">
<span class="ui-icon ui-icon-trash"></span>&nbsp;
</a>
</li>
</ul>
	</div>
<?php
} // end if
?>	
	<div class="clear"></div><br>	
</form>
</div>

<!- Formulario derecho !>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="grid_3 omega cuadroResaltado">
<?php
if ($inventariado == 1) {
?> 
<form id="frm_operacion" name="frm_operacion" method="post" action="edit_inventario.php">

<div class="grid_1 title_small alpha" align="right">Cantidad</div><div class="grid_1"><input name="cantidad" type="text" id="cantidad" size="3" maxlength="3" /></div>
<div class="grid_1 omega" align="right"> 
<ul id="icons" class="ui-widget ui-helper-clearfix">
<li class="ui-state-default ui-corner-all" title=".ui-icon-plus">
<a href="#" onclick="validar_operacion('1')">
<span class="ui-icon ui-icon-plus"></span>
</a>
</li>
</ul>
</div>
<div class="clear"></div>
<input name="operacion" type="hidden" id="operacion" value="1" />
<input name="id_producto2" type="hidden" id="id_producto2" value="<?php echo $id_producto ?>" />

<div class="prefix_2 grid_1 alpha omega" align="right"> 
<ul id="icons" class="ui-widget ui-helper-clearfix">
<li class="ui-state-default ui-corner-all" title=".ui-icon-minus">
<a href="#" onclick="validar_operacion('2')">
<span class="ui-icon ui-icon-minus"></span>
</a>
</li>
</ul>
</div>

</form>

<?php
} // end if
?>
</div>
</div>
<div class="clear"></div>
