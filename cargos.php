<?php

	$query1 = 'SELECT id_cadastro,
					 cadastro
			   FROM cadastro';

	$res1 = mysql_query($query1, $link1);

	$numero_linhas1 = mysql_num_rows($res1);


	if($numero_linhas1 > 0){

		while($linha1 = mysql_fetch_array($res1)) {

			$id_cadastro	= $linha1['id_cadastro'];
			$cadastro		= $linha1['cadastro'];
		

			$tab1  = '<tr>';
			$tab1 .= '<td> 
						<a href="" > Editar  </a> /
						<a href="" > Excluir </a>
					</td>';
			$tab1 .= '<td>'.$id_cadastro.'</td>';
			$tab1 .= '<td>'.$cadastro.'</td>';
			$tab1 .= '</tr>';

			$linha_formatada1[] = $tab1;		



		}	


	}



?>


<br>
<table width="100%" border="1">

	<tr>


		<td> Ações </td>
		<td> ID </td>
		<td> Cargo Cadastrado </td>

	</tr>


	<?php

		foreach ($linha_formatada1 as $key => $value) {


		echo $value;
	}


	?>


</table>
<br>