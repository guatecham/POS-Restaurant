<?php

session_start();
// Destruye todas las variables de la sesi&oacute;n
session_unset();
// Finalmente, destruye la sesi&oacute;n
session_destroy();
header("Location:index.php");

?>