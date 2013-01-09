<?php
include ("../../../utilerias/conex.php");
include ('../utilidades/seguridad_reportes.php');
include("../../Includes/FusionCharts.php");

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Detalle de ingresos brutos - restaurante HP</title>
<link href="../../../mrtechie/default.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
	    <div align="center">
<p>&nbsp;</p>		
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

echo renderChartHTML("../../Charts/MSColumn2D.swf", "", $strXML, "myNext", 780, 480, false);

?>
	      </p>
	      <p><a href="#" onclick="window.close()">[cerrar ventana]</a>  </p>
	    </div>
</body>
</html>
