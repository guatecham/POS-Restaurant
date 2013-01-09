<?php
include ("../../../utilerias/conex.php");
include ('../utilidades/seguridad_reportes.php');

?>
<style type="text/css">
<!--
.Estilo1 {	color: #CF3822;
	font-weight: bold;
}
.Estilo14 {color: #CC9900; font-size: 14px; }
.Estilo15 {	font-size: 12px;
	color: #CC9900;
	font-style:italic;
}
.Estilo19 {color: #E8922B}
.Estilo20 {color: #CF3822}
.Estilo21 {color: #FFFFFF}
.Estilo22 {color: #000000}
.Estilo23 {font-size: 12px; color: #000000; font-style: italic; }
.Estilo24 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body onLoad="window.print()">
<h2>Ventas </h2>
      <table width="60%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="Estilo15"><div align="center"><span class="Estilo21"><span class="Estilo22"><span class="Estilo22"></span></span></span></div></td>
          <td class="Estilo1"><div align="left" class="Estilo22">COMIDAS</div></td>
          <td class="Estilo15"><div align="right"><span class="Estilo21"><span class="Estilo22"><span class="Estilo22"></span></span></span></div></td>
        </tr>
        <?php
 $total_bruto=0;
 $sql="SELECT * FROM inf_carta WHERE tipo <> 5";
 $result=mysql_query($sql,$db);
 $i=0;
 $total=0;
 while ($row=mysql_fetch_array($result)) {
	$p=$row["id_producto"];
 	$cantidad=0;
	$sql="SELECT * FROM data_detalle_ventas WHERE id_producto=$p";
	$resultB=mysql_query($sql,$db);
	while ($rowB=mysql_fetch_array($resultB)) {
		$cantidad+=$rowB["cantidad"];
	} // end while
	$subtotal=$row["precio"]*$cantidad;
	$total+=$subtotal;
	if ($cantidad > 0 ) {
	 	$i++;
 ?>
        <tr>
          <td class="Estilo15"><div align="center" class="Estilo22"><?php echo $cantidad ?></div></td>
          <td class="Estilo14"><div align="left" class="Estilo22"><?php echo $row["producto"] ?></div></td>
          <td class="Estilo15"><div align="right" class="Estilo22"><?php echo "Q. ".$subtotal.".00" ?></div></td>
        </tr>
        <?php
	} // end if
 $total_bruto=$total; 
 } // end while
 ?>
        <tr>
          <td class="Estilo23">&nbsp;</td>
          <td class="Estilo1"><div align="left"><span class="Estilo22"></span></div></td>
          <td class="Estilo15"><hr /></td>
        </tr>
        <tr>
          <td class="Estilo23">&nbsp;</td>
          <td class="Estilo1"><div align="right" class="Estilo22">Total Comidas </div></td>
          <td class="Estilo15"><div align="right" class="Estilo22"><?php echo "Q.".$total.".00" ?></div></td>
        </tr>
        <tr>
          <td class="Estilo23">&nbsp;</td>
          <td class="Estilo1"><div align="left"><span class="Estilo22"></span></div></td>
          <td class="Estilo15"><div align="right"><span class="Estilo22"></span></div></td>
        </tr>
        <tr>
          <td class="Estilo15"><div align="center"><span class="Estilo19"><span class="Estilo20"><span class="Estilo22"><span class="Estilo22"></span></span></span></span></div></td>
          <td class="Estilo1"><div align="left" class="Estilo22">BEBIDAS</div></td>
          <td class="Estilo15"><div align="right"><span class="Estilo19"><span class="Estilo20"><span class="Estilo22"></span></span></span></div></td>
        </tr>
        <tr>
          <?php
 $sql="SELECT * FROM inf_carta WHERE tipo = 5";
 $result=mysql_query($sql,$db);
 $i=0;
 $total=0;
 while ($row=mysql_fetch_array($result)) {
 	$i++;
	$p=$row["id_producto"];
 	$cantidad=0;
	$sql="SELECT * FROM data_detalle_ventas WHERE id_producto=$p";
	$resultB=mysql_query($sql,$db);
	while ($rowB=mysql_fetch_array($resultB)) {
		$cantidad+=$rowB["cantidad"];
	} // end while
	$subtotal=$row["precio"]*$cantidad;
	$total+=$subtotal;
	if ($cantidad > 0 ) {
	 	$i++;	
 ?>
        <tr>
          <td class="Estilo15"><div align="center" class="Estilo22"><?php echo $cantidad ?></div></td>
          <td class="Estilo14"><div align="left" class="Estilo22"><?php echo $row["producto"] ?></div></td>
          <td class="Estilo15"><div align="right" class="Estilo22"><?php echo "Q. ".$subtotal.".00" ?></div></td>
        </tr>
        <?php
	} // end if		
 } // end while
 $total_bruto+=$total;
 ?>
        <tr>
          <td class="Estilo23">&nbsp;</td>
          <td class="Estilo1"><div align="left"><span class="Estilo22"></span></div></td>
          <td class="Estilo15"><hr /></td>
        </tr>
        <tr>
          <td class="Estilo23">&nbsp;</td>
          <td class="Estilo1"><div align="right" class="Estilo22">Total Bebidas </div></td>
          <td class="Estilo15"><div align="right" class="Estilo22"><?php echo "Q.".$total.".00" ?></div></td>
        </tr>
</table>
      <p>&nbsp;</p>
      <p class="Estilo24">Total de ingresos <?php echo "Q.".$total_bruto.".00" ?></p></body>
</html>
