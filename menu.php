<?php 
	include('utilidades/seguridad.php');
	include('utilidades/conex.php');

// Verificar permisos de modulos

	$sql="SELECT * FROM inf_usuarios WHERE id_usuario = ". $_SESSION["usuario_actual"];
	$rs=mysql_query($sql,$db);
	$row=mysql_fetch_object($rs);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ventas - Restaurante - El Peregrino</title>

<link rel="STYLESHEET" type="text/css" href="css/960.css" />
<link rel="STYLESHEET" type="text/css" href="css/reset.css" />
<link rel="STYLESHEET" type="text/css" href="css/text.css" />
<link href="../css/auxiliar.css" rel="stylesheet" type="text/css" />

<! Jquery >
<link type="text/css" href="css/sunny/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="utilidades/jquery/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="utilidades/jquery/js/jquery-ui-1.8.20.custom.min.js"></script>

<script type="text/javascript">
	$(function() {
		$( "#tabs" ).tabs();
	});
</script>

</head>

<body>

<div class="container_12">

	<div class="grid_12">
		
	<div id="tabs">
	<ul>
	<?php if ($row->mod_ventas == 1) { ?>
		<li><a href="#tabs-1">Ventas</a></li>
	<?php
		} // end if
	?>	
	<?php if ($row->mod_inventario == 1) { ?>
		<li><a href="#tabs-2">Inventario</a></li>
	<?php
		} // end if
	?>	
	<?php if ($row->mod_reportes == 1) { ?>
		<li><a href="#tabs-3">Reportes</a></li>
	<?php
		} // end if
	?>	
	<?php if ($row->mod_gastos == 1) { ?>        
		<li><a href="#tabs-4">Gastos</a></li>
	<?php
		} // end if
	?>	
		<li><a href="#tabs-5">Salir</a></li>
	</ul>
	<?php if ($row->mod_ventas == 1) { ?>
	<div id="tabs-1">
		<p><a href="ventas/index.php">Modulo de ventas</a></p>
	</div>
	<?php
		} // end if
	?>	
	<?php if ($row->mod_inventario == 1) { ?>	<div id="tabs-2">
		<p><a href="inventario/index.php">Modulo de inventario</a></p>
	</div>
	<?php
		} // end if
	?>	
	<?php if ($row->mod_reportes == 1) { ?>
	<div id="tabs-3">
		<p><a href="reportes/index.php">Modulo de Reportes</a></p>
		</div>
	<?php
		} // end if
	?>	
	<?php if ($row->mod_gastos == 1) { ?>	<div id="tabs-4">
		<p><a href="gastos/index.php">Modulo de Gastos</a></p>
		</div>
	<?php
		} // end if
	?>	
        <div id="tabs-5">
		<p><a href="salida.php">Salir</a></p>
		</div>    
	</div>
</div>
</body>