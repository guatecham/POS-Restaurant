<?php
include ('../utilidades/conex.php');
include ('../utilidades/seguridad_inventario.php'); 

if (isset($_REQUEST["subtipo"])) {
	$sql="SELECT * FROM inf_subtipos WHERE id_subtipo = ".$_REQUEST["subtipo"];
	$rs=mysql_query($sql,$db);
	$row=mysql_fetch_object($rs);
	$titulo = $row->subtipo;
} else {
	$titulo = "Detalle";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Inventario - Restaurante - El Peregrino</title>

<link rel="STYLESHEET" type="text/css" href="../css/960.css" />
<link rel="STYLESHEET" type="text/css" href="../css/reset.css" />
<link rel="STYLESHEET" type="text/css" href="../css/text.css" />
<link href="../css/auxiliar.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<! Jquery >
<link type="text/css" href="../css/sunny/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../utilidades/jquery/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../utilidades/jquery/js/jquery-ui-1.8.20.custom.min.js"></script>
<script type='text/javascript' src='../utilidades/jquery/jquery-autocomplete.js'></script>
<! Fin - Jquery >

<script type="text/javascript">
$(function(){
	// Tabs
	$('#tabs').tabs();
	
	//hover states on the static widgets
	$('#dialog_link, ul#icons li').hover(
		function() { $(this).addClass('ui-state-hover'); },
		function() { $(this).removeClass('ui-state-hover'); }
	);
	
	$("#producto").autocomplete("get_product_list.php", {
		width: 360,
		matchContains: true,
		selectFirst: false
	});

	$(document).ready(function () {
   	 	$('img.menu_class').click(function () {
	   	$('ul.the_menu').slideToggle('medium');});
    });

});	
</script>

<script type="text/javascript" >


function validar_edicion(recompra,precio,producto) {

if (confirm('Esta seguro que quiere modificar la informacion para este producto ?')) {
	if (document.getElementById('inventariado').checked) {
		if (isNaN(document.getElementById('recompra').value) || document.getElementById('recompra').value < 0 ) {
			document.getElementById('recompra').value = recompra;
			alert("La cantidad de recompra debe ser un numero mayor que 0");
			return 0;
		}
	}
	
	if (isNaN(document.getElementById('precio').value) || document.getElementById('precio').value < 0  ) {
		document.getElementById('precio').value = precio;
		alert("El precio debe ser un numero mayor que 0");
		return 0;
	}
	
	if (document.getElementById('nombre').value == "") {
		document.getElementById('nombre').value = producto;
		alert("No puede dejar el nombre del producto en blanco");
		return 0;
	}
	
	document.getElementById('frm_edicion').submit();

}

} // end function


function validar_operacion(o) {

	document.getElementById('operacion').value = o;	
	if (isNaN(document.getElementById('cantidad').value) || document.getElementById('cantidad').value <= 0 ) {
		document.getElementById('cantidad').value = '';
		alert("La cantidad de la operacion debe ser un numero mayor que 0");
		return 0;
	}

	document.getElementById('frm_operacion').submit();


} // end function


function validar_eliminar(id_producto, producto) {
	if (confirm('Desea eliminar de la base de datos el producto: \n\n\'' + producto + '\'\n\nEsta acción no podra deshacerse\n')) {
		document.location.href="del_producto.php?id_producto=" + id_producto;
	} // end if
	
} // end function

function validar(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13) document.getElementById('frm_autocomplete').submit();
}


</script>


<style type="text/css">
.obligatorio {
	color: #F00;
	font-size:11px;
}

.historial {
	color:#000;
	font-size:12px;
}
</style>
</head>

<body>
    <div class="container_12">
        <?php include('../utilidades/mainmenu.php'); ?><br>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>  
        <div class="grid_5"><h2 class="title" align="center">Buscar Producto</h2><?php include ('search.php') ?></div>
        <div class="grid_7"><h2 class="title" align="center"></h2><?php include ('detalle.php') ?></div>    
         <div class="clear"></div><br>
        <div class="grid_12"><?php include ('historial.php') ?></div>"
    </div>
</body>