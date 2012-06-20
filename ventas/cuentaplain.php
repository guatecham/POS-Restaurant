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
<table width="320" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" class="Estilo1"><hr /></td>
  </tr>
  <tr>
    <td colspan="2" class="Estilo1"><strong>COMIDAS</strong></td>
    <td width="72" class="Estilo1">&nbsp;</td>
    <td width="75" class="Estilo1">&nbsp;</td>
  </tr>
<?php
$totalComidas=0;
$sql="SELECT * FROM tmp_ventas WHERE mesa=$mesa";
$result=mysql_query($sql,$db);
while ($row=mysql_fetch_array($result)) {
 	$p=$row["producto"];
	$sql="SELECT * FROM inf_carta WHERE id_producto=$p";
	$resultB=mysql_query($sql,$db);
	$rowB=mysql_fetch_array($resultB);
	if ($rowB["tipo"] == 2) {
		$subtotal=$row["cantidad"] * $rowB["precio"];	
		$totalComidas+=$subtotal;
 ?> 
  <tr>
    <td colspan="2" class="Estilo1">&nbsp;</td>
    <td class="Estilo1">&nbsp;</td>
    <td class="Estilo1">&nbsp;</td>
  </tr>
  <tr>
    <td width="35" class="Estilo1"><?php echo $row["cantidad"] ?></td>
    <td width="138" class="Estilo1"><?php echo $rowB["producto"] ?></td>
    <td class="Estilo1"><?php echo $rowB["precio"].".00" ?></td>
    <td class="Estilo1"><div align="right"><?php echo $subtotal.".00" ?></div></td>
  </tr>
 <?php
 	} // end if
 } // end while
 ?>
  <tr>
    <td class="Estilo1">&nbsp;</td>
    <td colspan="2" class="Estilo6">&nbsp;</td>
    <td class="Estilo1"><hr align="right" /></td>
  </tr>
  <tr>
    <td class="Estilo1">&nbsp;</td>
    <td colspan="2" class="Estilo6"><div align="right">TOTAL COMIDAS </div></td>
    <td class="Estilo8"><div align="right"><?php echo "Q.".$totalComidas.".00" ?></div></td>
  </tr>
</table>
<table width="320" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" class="Estilo1"><strong>BEBIDAS</strong></td>
    <td width="72" class="Estilo1">&nbsp;</td>
    <td width="75" class="Estilo1">&nbsp;</td>
  </tr>
  <?php
$totalBebidas=0;
$sql="SELECT * FROM tmp_ventas WHERE mesa=$mesa";
$result=mysql_query($sql,$db);
while ($row=mysql_fetch_array($result)) {
 	$p=$row["producto"];
	$sql="SELECT * FROM inf_carta WHERE id_producto=$p";
	$resultB=mysql_query($sql,$db);
	$rowB=mysql_fetch_array($resultB);
	if ($rowB["tipo"] == 1) {
		$subtotal=$row["cantidad"] * $rowB["precio"];	
		$totalBebidas+=$subtotal;
 ?>
  <tr>
    <td width="35" class="Estilo1"><?php echo $row["cantidad"] ?></td>
    <td width="138" class="Estilo1"><?php echo $rowB["producto"] ?></td>
    <td class="Estilo1"><?php echo $rowB["precio"].".00" ?></td>
    <td class="Estilo1"><div align="right"><?php echo $subtotal.".00" ?></div></td>
  </tr>
  <?php
 	} // end if
 } // end while
 $total=$totalComidas + $totalBebidas;
 ?>
  <tr>
    <td class="Estilo1">&nbsp;</td>
    <td colspan="2" class="Estilo6">&nbsp;</td>
    <td class="Estilo1"><hr align="right" /></td>
  </tr>
  <tr>
    <td class="Estilo1">&nbsp;</td>
    <td colspan="2" class="Estilo6"><div align="right">TOTAL BEBIDAS </div></td>
    <td class="Estilo8"><div align="right"><?php echo "Q.".$totalBebidas.".00" ?></div></td>
  </tr>
</table>
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
