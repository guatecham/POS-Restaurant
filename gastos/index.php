<?php
//include ('funciones.php');
include ('../utilidades/conex.php'); 
include ('../utilidades/seguridad_gastos.php');

function show_fecha($f) {

	$aux = explode ("-",$f);
	$fecha = $aux[2]."/".$aux[1]."/".$aux[0];

	return $fecha;
}

$se='list_gastos.php';
$op=0;
if (isset($_REQUEST["op"])) {
    $op = $_REQUEST["op"];
    $se='show_rango.php';
} 

if (isset($_REQUEST["from"])) {
	$aux = explode('/',$_REQUEST["from"]);
	$desde = $aux[2]."-".$aux[1]."-".$aux[0];
	$show_desde = $_REQUEST["from"];
} else {
	$desde = date('Y-m-d');
	$show_desde = date('d/m/Y');
}
if (isset($_REQUEST["to"])) {
	$aux = explode('/',$_REQUEST["to"]);
	$hasta = $aux[2]."-".$aux[1]."-".$aux[0];
	$show_hasta = $_REQUEST["to"];
} else {
	$hasta = date('Y-m-d');
	$show_hasta = $_REQUEST["hasta"];
}

if (isset($_REQUEST["cuenta"])) {
	$cuenta = $_REQUEST["cuenta"];
	$sql_aux=" AND cuenta LIKE '$cuenta' ";
} else {
	$cuenta = "";
	$sql_aux="";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ventas - Restaurante - El Peregrino</title>

<script src="funciones.js" type="text/javascript"></script>
<link rel="STYLESHEET" type="text/css" href="../css/960.css" />
<link rel="STYLESHEET" type="text/css" href="../css/reset.css" />
<link rel="STYLESHEET" type="text/css" href="../css/text.css" />
<link href="../css/auxiliar.css" rel="stylesheet" type="text/css" />

<! Jquery >
<link type="text/css" href="../css/sunny/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../utilidades/jquery/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../utilidades/jquery/js/jquery-ui-1.8.20.custom.min.js"></script>
<script type='text/javascript' src='../utilidades/jquery/jquery-autocomplete.js'></script>
<! Fin - Jquery >

<script>
  $(function() {
  
        $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" });
  
        $("#cuenta").autocomplete("scripts/get_cuentas_list.php", {
		width: 200,
		matchContains: true,
		selectFirst: false
	});
  
    $( "#from" ).datepicker({
      dateFormat: "dd/mm/yy",
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      dateFormat: "dd/mm/yy",  
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
              
    });
  
  </script>

</head>


<body onload="javascript:document.getElementById('producto').focus();">
<?php 
$n=12;
?>
<div class="container_12">
<?php include('../utilidades/mainmenu.php'); ?><br>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<!-- Encabezado -->
<div align="center">
</div>
<div class="grid_12"><h2 class="title" align="left">Busqueda</h2><?php include ('select_rango.php') ?></div>
<div class="grid_12"><h2 class="title" align="left">Gastos</h2><?php include ($se) ?></div>
<div class="grid_12"><h2 class="title" align="left">Nuevo gasto</h2><?php include ('nuevo_gasto.php') ?></div>
</div>
</body>
</html>