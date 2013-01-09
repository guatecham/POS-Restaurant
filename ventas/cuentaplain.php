   <?php
include ("../utilidades/conex.php");

$mesa=$_REQUEST["mesa"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Cuenta mesa <?php echo $mesa ?></title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.Estilo6 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Estilo7 {
	font-size: 14px;
	color: #FF0000;
}
.Estilo8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; }
.Estilo9 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
}
.Estilo10 {font-size: 18px}
-->
</style>
</head>

<body>
<table width="320" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td colspan="2"><div align="center">
      <p class="Estilo9">El Peregrino - Restaurante</p>
    </div></td>
  </tr>
  <tr>
    <td width="94" class="Estilo1"><span class="Estilo6">Mesa # <?php echo $mesa ?></span></td>
    <td width="256" class="Estilo1"><div align="right"><?php echo date("d/m/Y")." / ".date("G:i a"); ?></div></td>
  </tr>
</table>

<p>&nbsp;</p>
<h2 class="Estilo7">Detalle</h2>
<?php
$total=0;
$sql="SELECT * FROM inf_tipos";
$rsMain=mysql_query($sql,$db);
while ($rowMain=mysql_fetch_object($rsMain)) {

/* Calculo del subtotal del tipo */
$sql="SELECT SUM(cantidad * precio) FROM tmp_ventas INNER JOIN inf_carta ON tmp_ventas.producto = inf_carta.id_producto WHERE subtipo IN (SELECT id_subtipo FROM inf_subtipos WHERE tipo = $rowMain->id_tipo) AND mesa = $mesa";
$rs=mysql_query($sql,$db);
$row=mysql_fetch_array($rs);
$subtotal = $row["SUM(cantidad * precio)"];
/* Fin de calculo del subtotal de tipos */

$sql="SELECT * FROM tmp_ventas INNER JOIN inf_carta ON tmp_ventas.producto = inf_carta.id_producto WHERE subtipo IN (SELECT id_subtipo FROM inf_subtipos WHERE tipo = $rowMain->id_tipo) AND mesa = $mesa";
$rs=mysql_query($sql,$db);
if (mysql_num_rows($rs) > 0) {	
?>
<table width="320" border="0" align="left" cellpadding="0" cellspacing="1">
<?php
while ($row=mysql_fetch_object($rs)) {
?>					  
        <tr class="Estilo1">
        <td align="center"><?php echo $row->cantidad ?>&nbsp;</td>
        <td align="left"><?php echo utf8_encode($row->producto) ?></td>
        <td align="right"><?php echo "Q. ".$row->cantidad * $row->precio ?></td>
      </tr>                      
<?php
} // end while
$total+=$subtotal;
?>  
       <tr class="Estilo7">
        <td align="center">&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>   
        <tr class="Estilo7">
        <td align="center">&nbsp;</td>
        <td align="right"><?php echo $rowMain->tipo ?></td>
        <td align="right"><?php echo "Q.".number_format($subtotal,2) ?></td>
      </tr>   
  </table>
<br><br>
<p>&nbsp;</p>
<?php  
} // end if
} // end while (tipos)
?>

<table width="320" border="0" cellspacing="2" cellpadding="0">
<tr>
    <td><hr /></td>
  </tr>
  <tr>
    <td><div align="right"><span class="Estilo6 Estilo7 Estilo10">TOTAL <?php echo "Q.".$total.".00" ?></span></div></td>
  </tr>
</table>
<p class="Estilo6 Estilo7">&nbsp;</p>
</body>
</html>
