<?php
if (isset($_REQUEST["tipo"])) {
	$tipo = $_REQUEST["tipo"];
} else {
	$tipo = 1;
}
?>
<div class="grid_5" align="center">
<?php 
	$sql="SELECT * FROM inf_tipos";
	$rs=mysql_query($sql,$db);
	while ($row=mysql_fetch_object($rs)) { ?>
		<a href="<?php echo $_SERVER["PHP_SELF"]."?tipo=$row->id_tipo" ?>"><button id="button"><?php echo $row->tipo; ?></button></a>
<?php
	}
?>
</div>
<div class="clear"></div
<p>&nbsp;</p>
<!-- Accordion -->
<?php
$sql="SELECT * FROM inf_tipos WHERE id_tipo = $tipo";
$rs=mysql_query($sql,$db);
$row=mysql_fetch_object($rs);
?>
<div id="accordion">
<?php
$sql="SELECT * FROM inf_subtipos WHERE tipo = $tipo";
$rs=mysql_query($sql,$db);
while ($row=  mysql_fetch_object($rs)) {
?>
    
			<div>
				<h3><a href="#"><?php echo $row->subtipo ?></a></h3>
				<div>
                                <?php
$sql="SELECT * FROM inf_carta WHERE subtipo = $row->id_subtipo ORDER BY inventariado DESC, producto";
$rsB=  mysql_query($sql,$db);
while ($rowB =  mysql_fetch_object($rsB)) {
    $aux = "";
    $aux2 = "";
    if ($rowB->inventariado == 1) {
        $sql="SELECT SUM(cantidad) FROM tmp_ventas WHERE producto = $rowB->id_producto";
        $rsC=mysql_query($sql,$db);
        $rowC=  mysql_fetch_array($rsC);
        $venta = $rowC["SUM(cantidad)"];
        $bodega = $rowB->existencia;
        $existencia = $bodega - $venta;
        
        $aux = '<img src="../images/check4.jpg" alt="" width="16" height="16" border=0 />';
        $aux2 = $existencia;
        if ($existencia < $rowB->reorden) {
            $aux = '<img src="../images/alerta.png" alt="" width="18" height="18" border=0 />';
        }
        if ($existencia <= 0) {
            $aux = '<img src="../images/alerta-icono-6332-96.png" alt="" width="20" height="20" border=0 />';
        }        
    } // end if
?>
<div class="grid_3 alpha"><a href="<?php echo "index.php?tipo=$tipo&producto=$rowB->id_producto" ?>"><p><?php echo utf8_encode($rowB->producto) ?></p></a></div>
<div class="grid_1 omega" align="right"><?php echo "$aux $aux2" ?></div>
<div class="clear"></div>

<?php
} // end while inf_carta
?>
                                </div>
			</div>
<?php
} // end while inf_subtipos
?>
</div>
