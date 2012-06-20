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
		<li><a href="#tabs-1">Ventas</a></li>
		<li><a href="#tabs-2">Inventario</a></li>
		<li><a href="#tabs-3">Reportes</a></li>
	</ul>
	<div id="tabs-1">
		<p><a href="ventas/index.php">Modulo de ventas</a></p>
	</div>
	<div id="tabs-2">
		<p><a href="inventario/index.php">Modulo de inventario</a></p>
	</div>
	<div id="tabs-3">
		<p><a href="reportes/index.php">Modulo de Reportes</a></p>
		</div>
	</div>
</div>
</body>