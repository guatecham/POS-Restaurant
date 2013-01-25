<?php
//Inicio la sesión 
session_start(); 

if (!isset($_SESSION["autentificado"])) {
	header("Location: index.php");
	exit();
} else {
	if ($_SESSION["autentificado"] != "SI") { 
   		header("Location: index.php"); 
   		exit(); 
   	}
}

?>