<?php

	require_once('conexao.php');
	require_once('connection.php')


?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>aula 1</title>

		<link rel="stylesheet" href="estilos.css"
	</head>
	<body>


<!--Tabela com borda, centralizado-->
		<table border="1" align="center" width="80%">

			<tr>

				<td class="txt"> Banner

					<br>
					<br>
					<br>
					<br>

				</td>

				

			</tr>


			<tr>

				<td>


					<a href="index.php?pag=home"> Home </a> ::
					<a href="index.php?pag=buscar"> Buscar </a> ::
					<a href="index.php?pag=cadastrar"> Cadastrar Cargo </a> ::
					<a href="index.php?pag=cargos"> Cargos </a> ::
					<a href="index.php?pag=inserir"> Inserir </a> ::
					<a href="index.php?pag=listar"> Listar </a> ::

					
					



				</td>




			</tr>

		
			<tr>

				<td class='txt1'> 

					<?php

						
						//está setado com conteúdo mas não está em branco 

						if(isset($_GET) and !empty($_GET)){

							//$_GET captura conteúdo

						$pg = $_GET['pag'];


							require_once($pg.'.php');



						}else{


							require_once('home.php');

						}

				

						//require_once('home.php');
					?>

				</td>

			</tr>


			<tr>

				<td class='txts'> Contato

					<br>
					<br>
					<br>
					<br>
					<br>
					<br>



				</td>

			</tr>


		</table>




	</body>
</html>