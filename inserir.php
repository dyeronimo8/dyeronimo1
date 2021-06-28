<?php

if(isset($_GET['status']) and !empty($_GET['status'])){

	$verifica = $_GET['status'];

}

?>



<form method="POST"action="acao_usuario.php">

	<input type="hidden" name="acao" value="inserir">


<?php


if(isset($verifica) and !empty($verifica)){

	if($verifica == 'OK'){


		echo 'Dados inseridos com sucesso!';
		
	}else{

		echo 'Faltaram campos a serem preenchidos!';
	}

}

?>
	<br> Nome <br>
	<input type="text" name="nome">

	<br> E-mail <br>
	<input type="text" name="e-mail">

	<br> Telefone <br>
	<input type="text" name="telefone">

	<br>
	<br>

	<input type = "submit" name = "botao" value = "enviar">




</form>