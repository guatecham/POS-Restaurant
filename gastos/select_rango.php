<div class="grid_12 title_small ui-state-highlight ui-corner-all" align="center">
    <br>
    <div class="prefix_1 grid_8 alpha" align="left">
    <form action="index.php" id="frm_rango" name="rango" method="post" >
        <label for="from">Desde</label>
        <input type="text" id="from" name="from" size="12" value="<?php echo $show_desde ?>" />
        <label for="to">Hasta</label>
        <input type="text" id="to" name="to" size="12" value="<?php echo $show_hasta ?>" />
        
        <label for="from">Cuenta</label>
        <input type="text" value="" name="cuenta" id="cuenta" size="20">
        <input type="submit" value="Ver">
        <input type="hidden" value="1" id="op" name="op">
    </form>   
    </div> 
    <div class="grid_2"><a href="index.php">Mostrar todos</a></div>
    <div class="clear"></div>
    <p>&nbsp;</p> 
</div>