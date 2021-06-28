<?php

	require_once('connection.php');

	$cadastro = $_POST['cadastro'];



	$query1 = 'INSERT INTO cadastro (
						   cadastro)
						   VALUE(
						   	"'.$cadastro.'")';

			
			$res1 = mysql_query($query1, $link1);
			
			if($res1 == true){

				$status = 'OK';

			}else{

				$status = 'erro';
			}

	


	header('Location: index.php?pag=cadastrar&status=OK');
	exit;


	die;

	?>

