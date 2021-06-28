<?php

	$query = 'SELECT id_contato,
					 nome,
					 email,
					 telefone
			  FROM contato';

	$res = mysql_query($query, $link);

	$numero_linhas = mysql_num_rows($res);


	if($numero_linhas > 0){

		while($linha = mysql_fetch_array($res)) {

			$id_contato	= $linha['id_contato'];
			$nome		= $linha['nome'];
			$email		= $linha['email'];
			$telefone	= $linha['telefone'];
		

			$tab  = '<tr>';
			$tab .= '<td> 
						<a href="" > Editar  </a> /
						<a href="" > Excluir </a>
					</td>';
			$tab .= '<td>'.$id_contato.'</td>';
			$tab .= '<td>'.$nome.'</td>';
			$tab .= '<td>'.$email.'</td>';
			$tab .= '<td>'.$telefone.'</td>';
			$tab .= '</tr>';

			$linha_formatada[] = $tab;		



		}	


	}



?>


<br>
<table width="100%" border="1">

	<tr>


		<td> Ações </td>
		<td> ID </td>
		<td> Nome </td>
		<td> E-mail </td>
		<td> Telefone </td>

	</tr>


	<?php

		foreach ($linha_formatada as $key => $value) {


		echo $value;
	}


	?>


</table>
<br>