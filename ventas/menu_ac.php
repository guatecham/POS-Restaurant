<p>&nbsp;</p>
<form autocomplete="off" action="add_producto.php" id="frm_autocomplete" name="frm_autocomplete">
<p align="center">
	<input type="text" size="3" name="cantidad" id="cantidad" value="1"/>
	<input type="text" size="30" name="producto" id="producto" onclick="this.value=''" />
	<input type="hidden" id="mesa" name="mesa" value="<?php echo $mesa ?>" />
	<input type="button" value="+" onclick="validarProducto()" />
</p>
</form>
