<?php
include ('../utilidades/conex.php'); 
include ('det.php');

$mes = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
$actual = date('m') - 1;

if (isset($_REQUEST["s"])) {
	$s = $_REQUEST["s"];	
} else {
	$s = 0;	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Reportes - Restaurante - El Peregrino</title>

<script src="funciones.js" type="text/javascript"></script>
<link rel="STYLESHEET" type="text/css" href="../css/960.css" />
<link rel="STYLESHEET" type="text/css" href="../css/reset.css" />
<link rel="STYLESHEET" type="text/css" href="../css/text.css" />
<link href="../css/auxiliar.css" rel="stylesheet" type="text/css" />

<! Jquery >
<link type="text/css" href="../css/sunny/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../utilidades/jquery/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../utilidades/jquery/js/jquery-ui-1.8.20.custom.min.js"></script>
<! Fin - Jquery >

<script type="text/javascript">
$(function(){
    // Tabs
    $('#tabs').tabs({selected: <?php echo $s ?>});
    
    $( "#from" ).datepicker({	
    	dateFormat: "dd/mm/yy",
		defaultDate: "+1w",
		changeMonth: true,
		numberOfMonths: 2,
		onSelect: function( selectedDate ) {
			$( "#to" ).datepicker( "option", "minDate", selectedDate );
		}
	});
	$( "#to" ).datepicker({
    	dateFormat: "dd/mm/yy",
    	defaultDate: "+1w",
		changeMonth: true,
		numberOfMonths: 2,
		onSelect: function( selectedDate ) {
			$( "#from" ).datepicker( "option", "maxDate", selectedDate );
		}
	});
    
});	
</script>

<script languaje="javascript">
function validarBorrar(id, fecha, hora, cantidad) {
if (confirm ("ADVERTENCIA: \n¿Esta seguro de querer eliminar la venta: \n\n" + fecha + " - " + hora + " - " + cantidad + "\n\nSe eliminaran todos los registros asociados a la misma y no podra deshacerse\n")) {
	document.location.href="del_venta.php?id=" + id;	
} // end if
} // end function
</script>

</head>
<body>
<div class="container_12">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
<!-- Tabs -->
<div class="prefix_1 grid_4 alpha"> <h2 class="title">Reporte Detallado</h2></div>
<div class="grid_7 omega title_small"><a href="index.php">Consolidado</a></div>
<div class="clear"></div>
<p>&nbsp;</p>
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Hoy (<?php echo date('d/m/Y') ?>)</a></li>
        <li><a href="#tabs-2">Mes (<?php echo $mes[$actual] ?>)</a></li>
        <li><a href="#tabs-3">A&ntilde;o (<?php echo date('Y') ?>)</a></li>
        <li><a href="#tabs-4">Rango</a></li>
    </ul>
	
    <div id="tabs-1"><?php echo detalle(date('Y-m-d'), date('Y-m-d')); ?></div>
    <div id="tabs-2"><?php echo detalle(date('Y-m-1'), date('Y-m-d')); ?></div>
    <div id="tabs-3"><?php echo detalle(date('Y-1-1'), date('Y-m-d')); ?></div>
    <div id="tabs-4">
    <?php
    if (isset($_REQUEST["from"])) {
		$a = explode("/",$_REQUEST["from"]);   
		$desdeSQL = $a[2]."-".$a[1]."-".$a[0];
		$show_desde = $_REQUEST["from"];
	} else {
		$desdeSQL = date('Y-m-d');
		$show_desde = date('d/m/Y');
    } // end if
    
    
    if (isset($_REQUEST["to"])) {
	    $a = explode("/",$_REQUEST["to"]);
	    $hastaSQL = $a[2]."-".$a[1]."-".$a[0];
	    $show_hasta = $_REQUEST["to"];
	} else {
		$hastaSQL = date('Y-m-d');
		$show_hasta = date('d/m/Y');    
    } // end
    ?>
    <form action="index.php" method="post" id="form1", name="form1">
	    <div class="grid_3 title alpha"><strong>Rango de fechas:</strong></div>
	    <div class="grid_1 title_small"align="right">Desde:</div>
	    <div class="grid_2" align="left"><input type="text"id="from" name="from" value="<?php echo date('d/m/Y') ?>"></div>
	    <div class="grid_1 title_small"align="right">Hasta:</div>
	    <div class="grid_2" align="left"><input type="text"id="to" name="to" value="<?php echo date('d/m/Y') ?>"></div>
	    <div class="grid_1 omega"><input type="submit"value="Generar"><input  type="hidden" id="s" name="s" value="3"></div>
	    <div class="clear"></div>  	  
	    <div class="grid_5 sufix_7 title_small"><?php echo "Desde: $show_desde" ?></div>  
	    <div class="clear"></div>
	    <div class="grid_5 sufix_7 title_small"><?php echo "Hasta: $show_hasta" ?></div>  
	    <div class="clear"></div>

    </form>
    <p>&nbsp;</p>
    <?php echo detalle($desdeSQL,$hastaSQL); ?>
    </div>
</div>    
</div>
</body>