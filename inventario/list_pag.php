<!- Menu !>
<?php
if (isset($_REQUEST["tipo"])) {
	$tipo = $_REQUEST["tipo"];
} else {
	$tipo = 1;
}

if (isset($_REQUEST["subtipo"])) {
	$subtipo = $_REQUEST["subtipo"];
} else {
	$sql="SELECT * FROM inf_subtipos WHERE tipo = $tipo";
	$rs=mysql_query($sql,$db);
	$row=mysql_fetch_object($rs);
	$subtipo = $row->id_subtipo;
}
?>

<ul id="icons" class="ui-widget ui-helper-clearfix">
<?php
$sql="SELECT * FROM inf_tipos ORDER BY tipo";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) {
?><li class="ui-state-default ui-corner-all" title=".ui-icon-copy">
<a href="index.php?tipo=<?php echo $row->id_tipo ?>">
<span class="ui-icon ui-icon-copy"></span><?php echo $row->tipo ?> &nbsp;
</a>
</li>
<?php
} // end while
?>
</ul>
<br>

<div class="grid_5 alpha">
<ul id="icons" class="ui-widget ui-helper-clearfix">
<?php
$sql="SELECT * FROM inf_subtipos WHERE tipo = $tipo ORDER BY subtipo";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) {
?><li class="ui-state-default ui-corner-all" title=".ui-icon-clipboard">
<a href="index.php?tipo=<?php echo $tipo ?>&subtipo=<?php echo $row->id_subtipo ?>">
<span class="ui-icon ui-icon-clipboard"></span><?php echo $row->subtipo ?> &nbsp;
</a>
</li>
<?php
} // end while
?>
</ul>
</div>
<!- Fin del menu !>


<!- Paginacion !>

<?php
$sql="SELECT * FROM inf_carta WHERE subtipo = $subtipo"; 
$rs=mysql_query($sql); 
$numeroRegistros=mysql_num_rows($rs); 

//////////calculo de elementos necesarios para paginacion 
   	//tama–o de la pagina 
   	$tamPag=18; 

   	//pagina actual si no esta definida y limites 
   	if(!isset($_REQUEST["pagina"])) 
   	{ 
      	 $pagina=1; 
      	 $inicio=1; 
      	 $final=$tamPag;
      	  
   	}else{ 
      	 $pagina = $_REQUEST["pagina"]; 
   	} 
   	//calculo del limite inferior 
   	$limitInf=($pagina-1)*$tamPag; 

   	//calculo del numero de paginas 
   	$numPags=ceil($numeroRegistros/$tamPag); 
   	if(!isset($pagina)) 
   	{ 
      	 $pagina=1; 
      	 $inicio=1; 
      	 $final=$tamPag; 
   	}else{ 
      	 $seccionActual=intval(($pagina-1)/$tamPag); 
      	 $inicio=($seccionActual*$tamPag)+1; 

      	 if($pagina<$numPags) 
      	 { 
         	 $final=$inicio+$tamPag-1; 
      	 }else{ 
         	 $final=$numPags; 
      	 } 

       if ($final>$numPags){ 
          $final=$numPags; 
      	 } 
   	} 

//////////fin de dicho calculo 
?>

<p>&nbsp;</p>
<div class="clear"></div>
<div class="grid_5 ui-state-highlight ui-corner-all omega" align="center">
<p>&nbsp;</p>
<table width="90%">
	<tr class="title_small">
		<td >Cant.</td>
		<td>Producto</td>
		<td></td>
	</tr>
<?php
$sql="SELECT * FROM inf_carta WHERE subtipo = $subtipo ORDER BY inventariado DESC, producto LIMIT $limitInf, $tamPag";
$rs=mysql_query($sql,$db);
while ($row=mysql_fetch_object($rs)) { 
   $aux = "";
    $aux2 = "";
    if ($row->inventariado == 1) {
        $sql="SELECT SUM(cantidad) FROM tmp_ventas WHERE producto = $row->id_producto";
        $rsB=mysql_query($sql,$db);
        $rowB=  mysql_fetch_array($rsB);
        $venta = $rowB["SUM(cantidad)"];
        $bodega = $row->existencia;
        $existencia = $bodega - $venta;
        
        $aux = '<img src="../images/check4.jpg" alt="" width="16" height="16" border=0 />';
        $aux2 = $existencia;
        if ($existencia < $row->reorden) {
            $aux = '<img src="../images/alerta.png" alt="" width="18" height="18" border=0 />';
        }
        if ($existencia <= 0) {
            $aux = '<img src="../images/alerta-icono-6332-96.png" alt="" width="20" height="20" border=0 />';
        }        
    } // end if
?>
	<tr>
		<td><?php echo $aux2 ?></td>
		<td><a href="index.php?tipo=<?php echo $tipo ?>&subtipo=<?php echo $subtipo ?>&pagina=<?php echo $pagina ?>&producto=<?php echo $row->id_producto ?>"><?php echo utf8_encode($row->producto) ?></a></td>
		<td><?php echo $aux ?></td>
	</tr>
<?php
} // end while
?>
</table>
<br>
<?php
for ($i=1;$i<=$numPags;$i++) { ?>
	<a href="index.php?tipo=<?php echo $tipo ?>&subtipo=<?php echo $subtipo ?>&pagina=<?php echo $i ?>"><?php echo $i." "; ?></a>
<?php
}
?>

</div>
 
 