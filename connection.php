<?php

	$servidor = 'localhost';
	$banco	  = 'cargo';
	$usuario  = 'root';
	$senha	  = '';
	
	$link1 = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());


	$db    = mysql_select_db($banco, $link1) or die(mysql_error());


	//echo 'cheguei aqui';
	//die;



?>