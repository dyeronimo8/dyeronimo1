<?php

	require_once('conexao.php');

	$conteudo_recebido = $_POST;

	//echo $conteudo_recebido['acao'];
	$acao = $conteudo_recebido['acao'];

	switch($acao){

		case'inserir':

			// $acao == inserir

			$nome 		= $conteudo_recebido['nome'];
			$email 		= $conteudo_recebido['e-mail'];
			$telefone 	= $conteudo_recebido['telefone'];

			$query = 'INSERT INTO contato (
							nome,
							email,
							telefone)
						   VALUE(
						   	"'.$nome.'",
						   	"'.$email.'",
						   	"'.$telefone.'")';

			
			//$res = mysql_query($query, $link) or die(mysql_error());
			$res = mysql_query($query, $link);
			
			if($res == true){

				$status = 'OK';

			}else{

				$status = 'erro';
			}

		break;

		case 'editar':

			// $acao editar

		break;


		case 'excluir':

			// $acao == excluir

		break;

		default:

			echo 'acao invalida';


	}


	header('Location: index.php?pag=inserir&status=OK');
	exit;


	die;

?>