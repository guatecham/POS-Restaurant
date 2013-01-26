<script>
function validarGasto() {
    if (document.getElementById('cantidad').value <= 0) {
        alert('Debe ingresar una cantidad mayor que 0 para el gasto');
        return 0;
    }
    
    if (document.getElementById('cuenta').value == "") {
        alert('Debe seleccionar una cuenta o ingresar una nueva');
        return 0;
    }
    
    document.getElementById('frm_gasto').submit();
}   
</script>
<div class="grid_12 align=center title_small ui-state-highlight ui-corner-all">
<form action="scripts/add_gasto.php" method="POST" id="frm_gasto" name="frm_gasto">
<p>&nbsp;</p>
<div class="grid_2 title_small" align="right">Fecha:</div>
<div class="grid_2" align="left"><input type="text" id="datepicker" name="datepicker" value="<?php echo date('d/m/Y') ?>" /></div>

<div class="grid_2 title_small" align="right"><p>Cantidad: Q.</p></div>
<div class="grid_2" align="left"><input type="text" name="cantidad" id="cantidad" value="" size="10"></div>

<div class="grid_1 title_small" align="right">Factura:</div>
<div class="grid_1" align="left"><input type="checkbox" value="1" name="factura" id="factura"></div>


<div class="clearfix"></div>

<div class="grid_2 title_small" align="right">Cuenta:</div>
<div class="grid_2" align="left"><input type="text" name="cuenta" id="cuenta" value=""></div>
<div class="grid_2 title_small" align="right">Descripcion:</div>
<div class="grid_2" align="left"><input type="text" name="descripcion" id="descripcion" value="" size="30"></div>

<div class="clearfix"></div>

<br>
<div class="prefix_2 grid_2"><input type="button" id="boton" name="boton" value="Ingresar gasto" onClick="validarGasto()" ></div>
<div class="clearfix"></div>

<p>&nbsp;</p>
</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>