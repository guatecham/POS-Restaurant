 <?php include ('../utilidades/conex.php'); ?>
<?php
if (isset($_REQUEST["mesa"])) {
	$mesa=$_REQUEST["mesa"];	
	
	if ($mesa != 0) {
		$sql="SELECT * FROM tmp_mesas WHERE mesa = $mesa";
		$rs=mysql_query($sql,$db);
		if (mysql_num_rows($rs) > 0) {
			$row=mysql_fetch_object($rs);
			$cliente = $row->nombre;
		} else {		
			$cliente = "Mesa No. $mesa";
		}
	} else {
		$cliente = "Ventas independientes";
	}
	
} else {
	$mesa = 0; 
	$cliente = "Ventas independientes";
}


if (isset($_REQUEST["tipo"])) {
	$tipo=$_REQUEST["tipo"];
} else {
	$tipo = 0;
}

$producto = $_REQUEST["producto"];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>El Peregrino - Restaurante</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" >


function validar() {
	if (isNaN(document.getElementById('cantidad').value) || document.getElementById('cantidad').value <= 0 ) {
		document.getElementById('cantidad').value = "";
		alert("La cantidad debe ser un numero mayor que 0");
	} else {		
		form2.submit();
	}
} // end function
</script>
</head>
<body>
<div id="wrapper">
<div id="header">
		<h1>El Peregrino</h1>
        <h2>Restaurante</h2>
	</div>	
    <div id="pages">
		<h1><?php echo $cliente ?></h1>
	</div>
  <div id="content">
	<div id="posts2">
		<form id="form2" method="post" action="add_multiple_producto.php">
		  Agregar
		  <input name="cantidad" type="text" id="cantidad" size="2" maxlength="2"/>
		  <strong>
		  <?php
		$sql="SELECT * FROM inf_carta WHERE id_producto = $producto";	
		$rs=mysql_query($sql,$db);
		$row=mysql_fetch_object($rs);
		echo utf8_encode($row->producto);
			?>
		  </strong>
		  <input type="button" name="button" id="button" value="OK" onclick="validar()" />
		  <input name="mesa" type="hidden" id="mesa" value="<?php echo $mesa ?>" />
      <input name="producto" type="hidden" id="producto" value="<?php echo $producto ?>" />
      <input name="tipo" type="hidden" id="tipo" value="<?php echo $tipo ?>" />
      </form>
		<div class="post">          
	  </div>	
			<div class="post">
				<h2 class="title">Detalle</h2>
			  <div class="story">
<?php
$sql="SELECT * FROM tmp_ventas INNER JOIN inf_carta ON tmp_ventas.producto = inf_carta.id_producto WHERE tipo = 1 AND mesa = $mesa";
$rs=mysql_query($sql,$db);
if (mysql_num_rows($rs) > 0) {	
?>				
                <p><strong>Bebidas</strong>:</p>
<?php
} // end if
?>                
                  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="2">
      <?php
$total2=0;
$sql="SELECT DISTINCT producto FROM tmp_ventas WHERE mesa=$mesa ORDER BY producto";
$result=mysql_query($sql,$db);
while ($row=mysql_fetch_array($result)) {
	$id_producto=$row["producto"];
	
// Cantidad
	$sql="SELECT * FROM tmp_ventas WHERE mesa=$mesa AND producto=$id_producto";
	$resultB=mysql_query($sql,$db);
	$rowB=mysql_fetch_array($resultB);
	$cantidad=$rowB["cantidad"];

// Nombre del producto
	$sql="SELECT * FROM inf_carta WHERE id_producto=$id_producto";
	$resultB=mysql_query($sql,$db);
	$rowB=mysql_fetch_array($resultB);
	
	if ($rowB["tipo"] == 1) {
		$total2+=$cantidad * $rowB["precio"];
?>
      <tr>
        <td width="9%"><a href="minus_producto.php?mesa=<?php echo $mesa ?>&amp;producto=<?php echo $id_producto ?>&amp;tipo=<?php echo $tipo ?>"><img src="../images/b_drop.png" alt="" width="16" height="16" border="0" /></a></td>
        <td width="10%" align="center"><?php echo $cantidad ?></td>
        <td width="49%" align="left"><?php echo $rowB["producto"] ?></td>
        <td width="32%" align="left"><?php echo "Q. ".$cantidad * $rowB["precio"] ?></td>
      </tr>
      <?php
	
	 } // end if (comidas)
} // end while
?>
    </table>
<?php
$sql="SELECT * FROM tmp_ventas INNER JOIN inf_carta ON tmp_ventas.producto = inf_carta.id_producto WHERE tipo = 2 AND mesa = $mesa";
$rs=mysql_query($sql,$db);
if (mysql_num_rows($rs) > 0) {	
?>				
				<p><strong>Comidas</strong>:</p>
<?php
} // end if
?>                  
				  
					<table width="95%" border="0" align="center" cellpadding="0" cellspacing="2">
      <?php
$total1=0;
$sql="SELECT DISTINCT producto FROM tmp_ventas WHERE mesa=$mesa ORDER BY producto";
$result=mysql_query($sql,$db);
while ($row=mysql_fetch_array($result)) {
	$id_producto=$row["producto"];
	
// Cantidad
	$sql="SELECT * FROM tmp_ventas WHERE mesa=$mesa AND producto=$id_producto";
	$resultB=mysql_query($sql,$db);
	$rowB=mysql_fetch_array($resultB);
	$cantidad=$rowB["cantidad"];

// Nombre del producto
	$sql="SELECT * FROM inf_carta WHERE id_producto=$id_producto";
	$resultB=mysql_query($sql,$db);
	$rowB=mysql_fetch_object($resultB);
	if ($rowB->tipo != 1) {
		$total1+=$cantidad * $rowB->precio;
?>
      <tr>
        <td width="9%"><a href="minus_producto.php?mesa=<?php echo $mesa ?>&amp;producto=<?php echo $id_producto ?>&amp;tipo=<?php echo $tipo ?>"><img src="../images/b_drop.png" alt="" width="16" height="16" border="0" /></a></td>
        <td width="10%" align="center"><?php echo $cantidad ?></td>
        <td width="49%" align="left"><?php echo utf8_encode($rowB->producto); ?></td>
        <td width="32%" align="left"><?php echo "Q. ".$cantidad * $rowB->precio ?></td>
        </tr>
      <?php
	
	 } // end if (comidas)
} // end while
$total=$total1 + $total2;
?>

    </table>	
	
                    <p></p>					
			  </div>
			</div>
		  <div class="meta"> </div>
		  <div class="meta"></div>
</div>
</div>
	<?php
	/*
    <div id="search" class="boxed">
			<h2 class="heading">Producto nuevo</h2>
			<div class="content">
				<form method="post" action="#">
					<div>
						<input type="text" id="textfield1" name="textfield1" value="" size="18" />
						<input type="submit" id="submit1" name="submit1" value="Go" />
					</div>
				</form>
			</div>
		</div>
		*/ ?>
</body>
</html>
