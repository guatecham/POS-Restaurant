<?php
	$producto = $_REQUEST["producto"];
?>
<div class="grid_6">
		<ul id="icons" class="ui-widget ui-helper-clearfix">
		<li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturnthick-1-w">
		<a href="index.php?mesa=<?php echo $mesa ?>&tipo=<?php echo $tipo ?>">
		<span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Volver &nbsp;&nbsp;
		</a>
		</li>
		</ul>
</div>
<div class="clear"></div>
<p>&nbsp;</p>
<div class="grid_6 ui-state-highlight ui-corner-all">
<p>&nbsp;</p>
<form id="form2" method="post" action="add_multiple_producto.php">
	<div class="grid_6 title" align="center">	  
		  <strong>
		  <?php
		$sql="SELECT * FROM inf_carta WHERE id_producto = $producto";	
		$rs=mysql_query($sql,$db);
		$row=mysql_fetch_object($rs);
		echo utf8_encode($row->producto);
			?>
		  </strong>
	</div>	  
	<div class="clear"></div>
	<p>&nbsp;</p>
	
	<div class="prefix_1 grid_2 alpha title" align="right">Agregar</div>
	<div class="grid_1" align="left"><input name="cantidad" type="text" id="cantidad" size="2" maxlength="2"/></div>
	<div class="grid_1 omega" align="center">
			  <input type="button" name="button" id="button" value="OK" onclick="validarVuelto()" />
	</div>		  
	  <!- Ocultos !>
	  <input name="mesa" type="hidden" id="mesa" value="<?php echo $mesa ?>" />
      <input name="producto" type="hidden" id="producto" value="<?php echo $producto ?>" />
      <input name="tipo" type="hidden" id="tipo" value="<?php echo $tipo ?>" />
      </form>
<p>&nbsp;</p>
<p>&nbsp;</p>

</div>