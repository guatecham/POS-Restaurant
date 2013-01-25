<?php
include ('../utilidades/conex.php');

session_start();

$usuario_actual = $_SESSION["usuario_actual"];
$sql="SELECT * FROM inf_usuarios WHERE id_usuario = $usuario_actual AND mod_gastos = 1";
$rs=mysql_query($sql,$db);

if (mysql_num_rows($rs) == 0) {
	header ("Location:../utilidades/error_modulo.php");
}
?>