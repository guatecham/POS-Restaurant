<?php
// Paginacion
   	//tama–o de la pagina 
   	$tamPag=20; 

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
   	
$sql="SELECT * FROM data_inventario WHERE producto = $id_producto ORDER BY fecha";
$result=mysql_query($sql,$db);
$numeroRegistros = mysql_num_rows($result);
if ($numeroRegistros > 0 ) {
	
	// calculo del numero de paginas 
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

// fin de calculo 	

?>
<a name="Ancla" id="a"></a>
<div class="grid_12 ui-state-highlight ui-corner-all">
<h2 class="title" align="center">Historial</h2>
 
<div class="prefix_3 grid_1 title_small">Fecha</div>
<div class="grid_1 title_small" align="center">Cant.</div>
<div class="grid_4 title_small">Descripcion</div>
<div class="clear"></div>
<div class="prefix_2 grid_8 sufix_2"><hr></div>
<br>
<?php
$sql="SELECT * FROM data_inventario WHERE producto = $id_producto ORDER BY fecha DESC, id_registro DESC LIMIT ".$limitInf.",".$tamPag;
$result=mysql_query($sql,$db);
while ($row=mysql_fetch_object($result)) {
		switch ($row->operacion) {
		case 1:
			$imagen = '<img src="../images/entradas.png" alt="" width="16" height="16" border="0" />';
			break;
		case 2:
			$imagen = '<img src="../images/salidas.png" alt="" width="16" height="16" border="0" />';
			break;
	}
?>      
<div class="prefix_3 grid_1"><?php echo $row->fecha ?></div>
<div class="grid_1" align="center"><?php echo $row->cantidad ?></div>
<div class="grid_4"><?php echo $imagen ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->comentarios ?></div>
<div class="clear"></div>
<br>
<?php
} // end while
?>
<div class="prefix_2 grid_8 sufix_2"><hr></div>
<div class="prefix_2 grid_2 title"><h2><?php echo $pagina ?></h2></div>
<div class="grid_6 title_small" align="right">Pagina
          <?php
for ($i=1;$i<=$numPags;$i++) {
?>
          <a href="index.php?producto=<?php echo $id_producto ?>&amp;pagina=<?php echo $i ?>#Ancla"><?php echo $i ?></a>
          <?php
} // end for
?></div>
<div class="clear"></div>
</div>


<?php
} // end if
?>