<?php
include ('../utilidades/conex.php');

$usuario = $_REQUEST["usuario"];
$clave = md5($_REQUEST["clave"]);

$sql="SELECT * FROM inf_usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
$result=mysql_query($sql,$db);

if (mysql_num_rows($result) > 0) { // Autenticado
	$row=mysql_fetch_array($result);
	
	session_start(); 
    $_SESSION["autentificado"]= "SI"; 
	$_SESSION["nombre_usuario"] = $row["nombre"];
	$_SESSION["usuario_actual"] = $row["id_usuario"];
	
	header("Location:../menu.php");
	 
} else { // No autenticado
	header ("Location:../error.php");
}

?>