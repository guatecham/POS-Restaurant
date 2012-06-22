/*function validar() {
	if (isNaN(form1.pagaCon.value)) {
		form1.pagaCon.value = "";
		alert("Debe ingresar una cantidad para pagar !!!");
	} else {
		if (form1.pagaCon.value == "") {
			alert("Debe ingresar una cantidad para pagar !!!");
		} else {
			if (form1.vuelto.value < 0) {
				alert("ERROR !!! - La cantidad que ingreso es menor que el total de la cuenta. \n\n Si desea cuentas separadas presione el boton correspondiente");
			} else {
				form1.submit();
			}
		}
	}

} // end function
*/

function confirmar_eliminar(m) {
	if (confirm("Desea eliminar esta venta ?")) {
		document.location.href="delete_transaction.php?mesa=" + m;
	}
}

function validarBorrar(id, fecha, hora, cantidad, tipo) {
if (confirm ("ADVERTENCIA: \n¿Esta seguro de querer eliminar la venta: \n\n" + fecha + " - " + hora + " - " + cantidad + "\n\nSe eliminaran todos los registros asociados a la misma y no podra deshacerse\n")) {
	document.location.href="../reportes/del_venta.php?id=" + id + "&tipo="+tipo+"&back=2" ;	
} // end if
} // end function

/*
$(function(){

	// Tabs
	$( "#tabs" ).tabs();

	// Accordion
	$("#accordion").accordion({header: "h3"});	
	$( "#accordion" ).accordion({ autoHeight: false });
	
	//hover states on the static widgets
	$('#dialog_link, ul#icons li').hover(
		function() { $(this).addClass('ui-state-hover'); },
		function() { $(this).removeClass('ui-state-hover'); }
	);

	$("#producto").autocomplete("get_product_list.php", {
		width: 360,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});

	
});	

function validarPago(t) {
   	if (isNaN(document.getElementById('pagaCon').value)) {
		document.getElementById('pagaCon').value = "";
		alert("Debe ingresar una cantidad para pagar !!!");
	} else {
		if (document.getElementById('pagaCon').value == "") {
			alert("Debe ingresar una cantidad para pagar !!!");
		} else {                
			if (document.getElementById('pagaCon').value < t) {
				alert("ERROR !!! - La cantidad que ingreso es menor que el total de la cuenta.");                               
                        } else {
                            
                            document.myform.submit();
                                  
			}
		}
	}

} // end function

function calcularvuelto(c) {
	a=document.getElementById('pagaCon').value;
	b=a-c;
	document.getElementById('vuelto').dissabled=false;
	document.getElementById('vuelto').value=b;
	document.getElementById('vuelto').dissabled=true;
	
} // end function

function validarProducto() {
	if (isNaN(document.getElementById('cantidad').value) || document.getElementById('cantidad').value < 1) {
		document.getElementById('cantidad').value = 1
	}
	
	document.getElementById('frm_autocomplete').submit()
}
</script>
*/