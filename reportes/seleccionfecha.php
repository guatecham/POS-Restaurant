<?php
$dia_d=$_REQUEST["dia_d"];
$mes_d=$_REQUEST["mes_d"];
$anyo_d=$_REQUEST["anyo_d"];

$dia_h=$_REQUEST["dia_h"];
$mes_h=$_REQUEST["mes_h"];
$anyo_h=$_REQUEST["anyo_h"];

$link="Location:simple.php?";
$link.="dia_d=$dia_d&";
$link.="mes_d=$mes_d&";
$link.="anyo_d=$anyo_d&";

$link.="dia_h=$dia_h&";
$link.="mes_h=$mes_h&";
$link.="anyo_h=$anyo_h";

header($link);
?>
