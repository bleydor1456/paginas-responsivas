<?php

$pagina=isset($_GET['p'])?strtolower($_GET['p']):'pages/inicio';
require_once 'pages/navegacion.php';
require_once 'pages/'.$pagina.'.php';
require_once 'pages/contacto.php';

?>

