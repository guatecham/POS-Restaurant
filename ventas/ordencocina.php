<?php
include ("../utilidades/conex.php");

$mesa=$_REQUEST["mesa"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Orden mesa<?php echo $mesa ?></title>
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
<table width="400" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <td colspan="2"><div align="center">
      <p class="Estilo9"><span class="Estilo10">El Peregrino - Restaurante</span></p>
    </div></td>
  </tr>
  <tr>
    <td width="94" class="Estilo1"><span class="Estilo10">Mesa # <?php echo $mesa ?></span></td>
    <td width="256" class="Estilo1"><div align="right"><span class="Estilo10"><?php echo date("d/m/Y")." / ".date("G:i a"); ?></span></div></td>
  </tr>
</table>
<table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" class="Estilo1"><hr /></td>
  </tr>
  <tr>
    <td colspan="2" class="Estilo1"><span class="Estilo10"><strong>COMIDAS</strong></span></td>
  </tr>
<?php
$sql="SELECT * FROM tmp_ventas WHERE mesa=$mesa";
$result=mysql_query($sql,$db);
while ($row=mysql_fetch_array($result)) {
 	$p=$row["producto"];
	$sql="SELECT * FROM inf_carta WHERE id_producto=$p";
	$resultB=mysql_query($sql,$db);
	$rowB=mysql_fetch_array($resultB);
	if ($rowB["tipo"] == 2) {
 ?> 
  <tr>
    <td colspan="2" class="Estilo1">&nbsp;</td>
  </tr>
  <tr>
    <td width="35" class="Estilo1"><span class="Estilo10"><?php echo $row["cantidad"] ?></span></td>
    <td class="Estilo1"><span class="Estilo10"><?php echo $rowB["producto"] ?></span></td>
  </tr>
 <?php
 	} // end if
 } // end while
 ?>
</table>
<p class="Estilo6 Estilo7">&nbsp;</p>
</body>
</html>
