<?php

if(isset($_GET['status']) and !empty($_GET['status'])){

	$verifica1 = $_GET['status'];

}

?>



<form method="POST"action="acao_cadastrar.php">

	<input type="hidden" name="action" value="inserir">


<?php


if(isset($verifica1) and !empty($verifica1)){

	if($verifica1 == 'OK'){


		echo 'Novo cargo cadastrado com sucesso!';
		
	}else{

		echo 'Faltaram campos a serem preenchidos!';
	}

}

?>


<br> Cadastrar Cargo <br>
	<input type="text" name="cadastro">

	<br>
	<br>

	<input type = "submit" name = "botao" value = "enviar">




</form>