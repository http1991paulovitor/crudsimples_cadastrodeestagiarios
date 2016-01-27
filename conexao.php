<?php

$servidor = 'localhost';
$banco	  = 'test';
$usuario  = 'root';
$senha    = '';
$link     = mysql_connect($servidor, $usuario, $senha);
$db		  = mysql_select_db($banco,$link);

?>
