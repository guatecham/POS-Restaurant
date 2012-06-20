function calcularvuelto(c) {        
        a=form1.pagaCon.value;
	b=a-c;
	form1.vuelto.dissabled=false;
	form1.vuelto.value=b;
	form1.vuelto.dissabled=true;
	
} // end function

function validar() {
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