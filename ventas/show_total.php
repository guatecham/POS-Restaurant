<p>&nbsp;</p>
<div class="clear"></div>
<div class="grid_4">
<?php
if ($total > 0) {
?>
 <div class="ui-state-error ui-corner-all">
 	<p id="totalBig"><?php echo "Total: Q.".number_format($total,2); ?></p>
 </div>
</div>
<div class="clear"></div>
<br>
<div class="grid_4 ui-state-highlight ui-corner-all">
<br>
<form autocomplete="off" name="myform" action="pagototal.php">  
     <!- Pago !>          
     <div class="grid_2 alpha title_small" align="right">Paga con Q.</div>
     <div class="grid_2 omega">
         <input name="pagaCon" type="text" id="pagaCon" onchange="calcularvuelto(<?php echo $total ?>)" value="<?php echo $total ?>" size="4" maxlength="6" />
     </div>
     <div class="clear"></div>
	<!- Vuelto !>     
     <div class="grid_2 alpha title_small" align="right">Vuelto Q.</div>
     <div class="grid_2 omega">
         <input name="vuelto" type="text" class="Estilo14" id="vuelto" size="4" maxlength="6" disabled="disabled" />
     </div>
         <input name="mesa" type="hidden" id="mesa" value="<?php echo $mesa ?>" />
         <input name="total" type="hidden" id="total" value="<?php echo $total ?>" />
     <div class="clear"></div>
        <br>
	
	
	<div class="grid_4 alpha" align="center">
		<label class="title_small">Vale a </label><input type="text" size="20" name="valea" id="valea">
	</div>
	<p>&nbsp;</p>
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