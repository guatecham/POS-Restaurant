<?php
//include ('utilidades/seguridad.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ventas - Restaurante - El Peregrino</title>

<?php
/*
<link rel="STYLESHEET" type="text/css" href="css/960.css" />
<link rel="STYLESHEET" type="text/css" href="css/reset.css" />
<link rel="STYLESHEET" type="text/css" href="css/text.css" />
<link href="../css/auxiliar.css" rel="stylesheet" type="text/css" />
*/
?>
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
	
	<h2>Ingreso</h2>
<hr />
<div class="left" align="center">
  <form id="form1" method="post" action="utilidades/control.php">
    <table width="500" border="0" cellspacing="3" cellpadding="3">
      <tr>
        <td width="117"><span class="Estilo1"></span></td>
        <td width="41"><span class="Estilo1">Usuario:</span></td>
        <td width="82"><span class="Estilo1">
          <label>
          <input name="usuario" type="text" id="usuario" size="15" maxlength="15" />
          </label>
        </span></td>
        <td width="31"><span class="Estilo1">Clave:</span></td>
        <td width="82"><span class="Estilo1">
          <label>
          <input name="clave" type="password" id="clave" size="15" maxlength="15" />
          </label>
        </span></td>
        <td width="290"><span class="Estilo1">
          <label>
            
          <input type="submit" name="Submit" value="Enviar" />
          </label>
        </span></td>
      </tr>
    </table>
  </form>
 </div>	
</body>