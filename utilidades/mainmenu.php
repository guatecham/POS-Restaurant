<?php
// Verificar permisos de modulos
	$sql="SELECT * FROM inf_usuarios WHERE id_usuario = ". $_SESSION["usuario_actual"];
	$rs=mysql_query($sql,$db);
	$row=mysql_fetch_object($rs)
?>
<div class="grid_1">&nbsp;</div>
<div class="grid_2" id="menu"><a href="../menu.php">Inicio</a></div>

<?php if ($row->mod_ventas == 1) { ?>
<div class="grid_2" id="menu"><a href="../ventas/index.php">V</a></div>
<?php	} // end if?>
	
<?php if ($row->mod_reportes == 1) { ?>
<div class="grid_2" id="menu"><a href="../inventario/index.php">I</a></div>
<?php	} // end if?>
	
<?php if ($row->mod_reportes == 1) { ?>
<div class="grid_2" id="menu"><a href="../reportes/index.php">R</a></div>
<?php	} // end if?>
	
<?php if ($row->mod_gastos == 1) { ?><div class="grid_2" id="menu"><a href="../gastos/index.php">G</a></div>
<?php	} // end if ?>	
<div class="grid_1">&nbsp;</div>
