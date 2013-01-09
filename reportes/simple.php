<?php
include ("../../../utilerias/conex.php");
include("../../Includes/FusionCharts.php");

if (isset($_REQUEST["dia_d"])) {
	$dia_d=$_REQUEST["dia_d"];
} else {
	$dia_d = date("d");
}

if (isset($_REQUEST["mes_d"])) {
	$mes_d=$_REQUEST["mes_d"];
} else {
	$mes_d = date("m");
}
if (isset($_REQUEST["anyo_d"])) {
	$anyo_d=$_REQUEST["anyo_d"];
} else {
	$anyo_d = date("Y");
}

if (isset($_REQUEST["dia_h"])) {
	$dia_h=$_REQUEST["dia_h"];
} else {
	$dia_h = date("d");
}

if (isset($_REQUEST["mes_h"])) {
	$mes_h=$_REQUEST["mes_h"];
} else {
	$mes_h = date("m");
}
if (isset($_REQUEST["anyo_h"])) {
	$anyo_h=$_REQUEST["anyo_h"];
} else {
	$anyo_h = date("Y");
}

$desde=$anyo_d."-".$mes_d."-".$dia_d;
$hasta=$anyo_h."-".$mes_h."-".$dia_h;

$a1=explode("-",$desde);
$desdeB=$a1[2]."/".$a1[1]."/".$a1[0];

$a2=explode("-",$hasta);
$hastaB=$a2[2]."/".$a2[1]."/".$a2[0];

function get_mes($m) {

switch ($m) {
	case 1:
		return "Enero";
		break;
	case 2:
		return "Febrero";
		break;	
	case 3:
		return "Marzo";
		break;	
	case 4:
		return "Abril";
		break;	
	case 5:
		return "Mayo";
		break;
	case 6:
		return "Junio";
		break;	
	case 7:
		return "Julio";
		break;	
	case 8:
		return "Agosto";
		break;	
	case 9:
		return "Septiembre";
		break;
	case 10:
		return "Octubre";
		break;	
	case 11:
		return "Noviembre";
		break;	
	case 12:
		return "Diciembre";
		break;	
} // end switch

} // end function

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : External
Version    : 1.0
Released   : 200800204
Description: Three-column blog design with the third column allocated for ads. Features Web 2.0 design ideal for 1024x768 resolutions.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Reportes restaurante - &quot;El Peregrino&quot;</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../../../mrtechie/default.css" rel="stylesheet" type="text/css" media="screen" />

<style type="text/css">
<!--
.Estilo1 {
	color: #CF3822;
	font-weight: bold;
}
.Estilo14 {color:#000000; font-size: 14px; }
.Estilo15 {
	font-size: 12px;
	color:#000000;
	font-style:italic;
}
.Estilo19 {color: #E8922B}
.Estilo20 {color: #CF3822}
.m1 {   font-family:MS Sans Serif;
   font-size:8pt
}
-->
</style>

</head>
<body>
<!-- start header -->
<div id="wrapper">
<div id="header">
	<div id="logo">
		<h1><a href="../../../restaurante/reportes/index.php">Restaurante </a></h1>
		<p><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hotel El Peregrino</a></p>
	</div>
</div>
<!-- end header -->
<!-- star menu -->
<div id="menu">
<ul>	
	<li class="current_page_item"><a href="simple.php">Reporte Restaurante </a></li>	
	<li><a href="../../recepcion/reportes/simple.php?dia_d=<?php echo $dia_d ?>&mes_d=<?php echo $mes_d ?>&anyo_d=<?php echo $anyo_d ?>&dia_h=<?php echo $dia_h ?>&mes_h=<?php echo $mes_h ?>&anyo_h=<?php echo $anyo_h ?>">Reporte Recepcion </a></li>	
</ul>
</div>
<!-- end menu -->
<!-- start page -->
<div id="page">
	<!-- start ads -->
	<div id="ads"><a href="#"></a></div>
	<!-- end ads -->
	<!-- start content -->
	<div id="content">
		<div class="post">
		  <div class="entry">
<h2><a href="simplePlain.php">Ventas</a> <a href="simplePlain.php"></a></h2>
<span class="Estilo1">desde el <?php echo $desdeB ?> hasta el <?php echo $hastaB ?></span>
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td bgcolor="#FFB700" class="Estilo15"><div align="center"></div></td>
    <td bgcolor="#FFB700" class="Estilo1"><div align="left">COMIDAS</div></td>
    <td bgcolor="#FFB700" class="Estilo15"><div align="right"></div></td>
  </tr>
<?php
 $total_bruto=0;
 $sql="SELECT * FROM inf_carta WHERE tipo <> 1";
 $result=mysql_query($sql,$db);
 $i=1;
 $total=0;
 while ($row=mysql_fetch_array($result)) {
	if ($i % 2 == 0) {
		$color="#84B3FC";
	} else {
		$color="";
	}
	$p=$row["id_producto"];
 	$cantidad=0;
	$sql="SELECT * FROM data_detalle_ventas INNER JOIN data_ventas ON data_detalle_ventas.id_venta=data_ventas.id_venta WHERE data_detalle_ventas.id_producto=$p AND data_ventas.fecha BETWEEN '$desde' AND '$hasta'";
	$resultB=mysql_query($sql,$db);
	while ($rowB=mysql_fetch_array($resultB)) {
		$cantidad+=$rowB["cantidad"];
	} // end while
	$subtotal=$row["precio"]*$cantidad;
	$total+=$subtotal;
	if ($cantidad > 0) {
		$i++;
 ?> 
  <tr bgcolor="<?php echo $color ?>">
    <td class="Estilo15"><div align="center"><?php echo $cantidad ?></div></td>
    <td class="Estilo14"><div align="left"><?php echo $row["producto"] ?></div></td>
    <td class="Estilo15"><div align="right"><?php echo "Q. ".number_format($subtotal,"2",".",",") ?></div></td>
  </tr>
 <?php
 $total_bruto=$total;
 	} // end if (cantidad > 0)
 } // end while
 ?>
  <tr>
    <td class="Estilo15">&nbsp;</td>
    <td class="Estilo1"><div align="left"></div></td>
    <td class="Estilo15"><hr /></td>
  </tr>
  <tr>
    <td class="Estilo15">&nbsp;</td>
    <td class="Estilo1"><div align="right">Total Comidas </div></td>
    <td class="Estilo15"><div align="right"><?php echo "Q.".number_format($total,"2",".",",") ?></div></td>
  </tr>
  <tr>
    <td class="Estilo15">&nbsp;</td>
    <td class="Estilo1"><div align="left"></div></td>
    <td class="Estilo15"><div align="right"></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFB700" class="Estilo15"><div align="center" class="Estilo20"></div></td>
    <td bgcolor="#FFB700" class="Estilo1"><div align="left" class="Estilo20">BEBIDAS</div></td>
    <td bgcolor="#FFB700" class="Estilo15"><div align="right" class="Estilo20"></div></td>
  </tr>
  <tr>
<?php
 $sql="SELECT * FROM inf_carta WHERE tipo = 1";
 $result=mysql_query($sql,$db);
 $i=1;
 $total=0;
 while ($row=mysql_fetch_array($result)) {
	if ($i % 2 == 0) {
		$color="#84B3FC";
	} else {
		$color="";
	}
	$p=$row["id_producto"];
 	$cantidad=0;
	$sql="SELECT * FROM data_detalle_ventas INNER JOIN data_ventas ON data_detalle_ventas.id_venta=data_ventas.id_venta WHERE data_detalle_ventas.id_producto=$p AND data_ventas.fecha BETWEEN '$desde' AND '$hasta'";
	$resultB=mysql_query($sql,$db);
	while ($rowB=mysql_fetch_array($resultB)) {
		$cantidad+=$rowB["cantidad"];
	} // end while
	$subtotal=$row["precio"]*$cantidad;
	$total+=$subtotal;
	if ($cantidad > 0) {
		$i++;
 ?> 
  <tr bgcolor="<?php echo $color ?>">
    <td class="Estilo15"><div align="center"><?php echo $cantidad ?></div></td>
    <td class="Estilo14"><div align="left"><?php echo $row["producto"] ?></div></td>
    <td class="Estilo15"><div align="right"><?php echo "Q. ".number_format($subtotal,"2",".",",") ?></div></td>
  </tr>
 <?php
 	} // end if (cantidad >0)
 } // end while
 $total_bruto+=$total;
 ?>
 <tr>
    <td class="Estilo15">&nbsp;</td>
    <td class="Estilo1"><div align="left"></div></td>
    <td class="Estilo15"><hr /></td>
  </tr>
  <tr>
    <td class="Estilo15">&nbsp;</td>
    <td class="Estilo1"><div align="right">Total Bebidas </div></td>
    <td class="Estilo15"><div align="right"><?php echo "Q.".number_format($total,"2",".",",") ?></div></td>
  </tr>
</table>
		  </div>
	  </div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar"> 
	  <form id="form1" method="post" action="seleccionfecha.php">
	    <table width="100%" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td>&nbsp;</td>
            <td><strong>Dia</strong></td>
            <td><strong>Mes</strong></td>
            <td><strong>A&ntilde;o</strong></td>
          </tr>
          <tr>
            <td><strong>Desde</strong></td>
            <td><select name="dia_d" size="1" id="dia_d" onchange="submit()">
              <?php
	for ($i=1; $i<=31; $i++) {
		if ($dia_d == $i) {
			$aux='selected="selected"';
		} else {
			$aux="";
		}
	?>
              <option value="<?php echo $i ?>" <?php echo $aux ?>><?php echo $i ?></option>
              <?php
	} // end for
	?>
            </select></td>
            <td><select name="mes_d" size="1" id="mes_d" onchange="submit()">
              <?php
	for ($i=1; $i<=12; $i++) {
		if ($mes_d == $i) {
			$aux='selected="selected"';
		} else {
			$aux="";
		}
	?>
			  <option value="<?php echo $i ?>" <?php echo $aux ?>><?php echo $i ?></option>
              <?php
	} // end for
	?>
            </select></td>
            <td><select name="anyo_d" id="anyo_d" onchange="submit()">
              <?php
	for ($i=2008; $i<=2012; $i++) {
		if ($anyo_d == $i) {
			$aux='selected="selected"';
		} else {
			$aux="";
		}
	?>
			  <option value="<?php echo $i ?>" <?php echo $aux ?>><?php echo $i ?></option>
              <?php
	} // end for
	?>
                                    </select></td>
          </tr>
          <tr>
            <td><strong>Hasta</strong></td>
            <td><select name="dia_h" size="1" id="dia_h" onchange="submit()">
              <?php
	for ($i=1; $i<=31; $i++) {
		if ($dia_h == $i) {
			$aux='selected="selected"';
		} else {
			$aux="";
		}
	?>
              <option value="<?php echo $i ?>" <?php echo $aux ?>><?php echo $i ?></option>
              <?php
	} // end for
	?>
            </select></td>
            <td><select name="mes_h" size="1" id="mes_h" onchange="submit()">
     <?php
	for ($i=1; $i<=12; $i++) {
		if ($mes_h == $i) {
			$aux='selected="selected"';
		} else {
			$aux="";
		}
	?>
			  <option value="<?php echo $i ?>" <?php echo $aux ?>><?php echo $i ?></option>
              <?php
	} // end for
	?>         
            </select></td>
            <td><select name="anyo_h" id="anyo_h" onchange="submit()">
              <?php
	for ($i=2008; $i<=2012; $i++) {
		if ($anyo_h == $i) {
			$aux='selected="selected"';
		} else {
			$aux="";
		}
	?>
			  <option value="<?php echo $i ?>" <?php echo $aux ?>><?php echo $i ?></option>
              <?php
	} // end for
	?>
            </select></td>
          </tr>
        </table>
      </form>
	  <p>&nbsp;</p>
	  <h2 align="left">Total <?php echo "Q.".number_format($total_bruto,"2",".",",") ?></h2>
	  <ul><li id="categories">
	    <label></label>
	  </li>
	  </ul>
	</div>
	<div id="sidebar">
	  <p>
	    <?php
$strXML  = "";
$strXML .= "<chart caption='Reporte de ventas Restaurante HP' yAxisName='Ingreso bruto' showValues='0'    formatNumberScale='0' showBorder='1'>";
  
$strXML .= "<categories>";
$sql="SELECT DISTINCT MONTH(fecha) FROM data_ventas ORDER BY MONTH(fecha)";
$result=mysql_query($sql,$db);
while ($row=mysql_fetch_array($result)) {
	$m=$row["MONTH(fecha)"];
	$mes=get_mes($m);
	$strXML .= "<category label='$mes' />";
} // end while
$strXML .= "</categories>";

for ($i=2008;$i<2010;$i++) {

$strXML .="<dataset seriesName='$i'>";
$sql="SELECT DISTINCT MONTH(fecha) FROM data_ventas ORDER BY MONTH(fecha)";
$result=mysql_query($sql,$db);
while ($row=mysql_fetch_array($result)) {
	$m=$row["MONTH(fecha)"];
	$sql="SELECT SUM(total) FROM data_ventas WHERE MONTH(fecha) = $m AND YEAR(fecha) = $i";
	$resultB=mysql_query($sql,$db);
	while ($rowB=mysql_fetch_array($resultB)) {
		$d=$rowB["SUM(total)"];
		$strXML .= "<set value='$d' />";
	} // end while	
} // end while	

$strXML .= "</dataset>";
} // end for
  
$strXML .= "</chart>";

echo renderChartHTML("../../Charts/MSColumn2D.swf", "", $strXML, "myNext", 350, 190, false);

?>
        <a href="#" onclick="window.open('view.php','ventana1','width=800,height=600, scrollbars=NO')">agrandar grafica </a></p>
	  <p>&nbsp;  </p>
	</div>
	<p>
	  <!-- end sidebar -->
</p>
	<p>&nbsp;    </p>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<p class="legal">
		<?php echo date('Y') ?>&nbsp;* Esquipulas</p>
</div>
</div>
<!-- end footer -->
</body>
</html>
