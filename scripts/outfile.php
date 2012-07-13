<?
include('../utlidades/conex.php');

$tabla = 'data_ventas';
$archivo = '../backup/backup-'.$tabla.'-'.date('Ymd').'.sql';
$sql  = "SELECT * INTO OUTFILE '$archivo' FROM $tabla";
echo $sql;
$result = mysql_query($sql);

if ($result) {
	
	echo "Se ha hecho un respaldo exitoso de la tabla $tabla";
	
}
?>