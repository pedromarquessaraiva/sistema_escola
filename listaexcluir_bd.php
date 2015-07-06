<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "Você está logado! ;D<br/>";
	}
	?>

<?php include "conexao_bd.php"; ?>

<html>
<head>
    <meta charset="UTF-8"/>
	<script language="JavaScript" src="_javascript/funcoes.js"></script>
	<title>Tela de Editar!</title>

</head>
<body>

	
	<?php

	$nome = $_POST['buscar'];
	$tabela = $_POST['categorias'];

	switch ($tabela)

 {
		case "aluno":
				$sql_listar_tabela = mysql_query("select * from $tabela where nome like '%$nome%'") or die(mysql_error());
	
		$total_registros = mysql_num_rows($sql_listar_tabela);

		while ($resultado_tabela = mysql_fetch_array($sql_listar_tabela)) {

				$codigo = $resultado_tabela['codigo'];
				$nome  = $resultado_tabela['nome'];
				$turma = $resultado_tabela['turma'];
				$turno = $resultado_tabela['turno'];
				$professor = $resultado_tabela['professor'];
			
	echo "
	<table width='700' border='1' align='center'>
		<tr>
			<td width='343'>Código</td>
			<td width='343'>Nome</td>
			<td width='343'>Turma</td>
			<td width='343'>Turno</td>
			<td width='343'>Professor</td>
			</tr> 
	<tr>
		<td>".$codigo."</td>
		<td>".$nome."</td>
		<td>".$turma."</td>
		<td>".$turno."</td>
		<td>".$professor."</td>

	</tr>";



}
 		# é atribuido o valor da variável tabela a sessao, que é mandada para pagina excluir_bd. 
 		$_SESSION['tabela'] = $tabela;
			break;
	



			case "funcionario":
	
				$sql_listar_tabela = mysql_query("select * from $tabela where nome like '%$nome%'") or die(mysql_error());
	
		$total_registros = mysql_num_rows($sql_listar_tabela);

		while ($resultado_tabela = mysql_fetch_array($sql_listar_tabela)) {
				
				$codigo = $resultado_tabela['codigo'];
				$nome  = $resultado_tabela['nome'];
				$turma = $resultado_tabela['cargo'];
				$turno = $resultado_tabela['turno'];
					
	echo "

	<table width='700' border='1' align='center'>
		<tr>
			<td width='343'>Código</td>
			<td width='343'>Nome</td>
			<td width='343'>Turma</td>
			<td width='343'>Turno</td>
			</tr> 
	<tr>
		<td>".$codigo."</td>
		<td>".$nome."</td>
		<td>".$turma."</td>
		<td>".$turno."</td>
	</tr> 

	";
		}

		 		# é atribuido o valor da variável tabela a sessao, que é mandada para pagina excluir_bd. 
		 		$_SESSION['tabela'] = $tabela;

			break;

	case "responsavel":

				$sql_listar_tabela = mysql_query("select * from $tabela where nome like '%$nome%'") or die(mysql_error());
	
		$total_registros = mysql_num_rows($sql_listar_tabela);

		while ($resultado_tabela = mysql_fetch_array($sql_listar_tabela)) {
				
				$codigo = $resultado_tabela['codigo'];
				$nome  = $resultado_tabela['nome'];
				$usuario = $resultado_tabela['usuario'];
									
	echo "

	<table width='700' border='1' align='center'>
		<tr>
			<td width='343'>Código</td>
			<td width='343'>Nome</td>
			<td width='343'>Usuario</td>
			</tr> 
	<tr>
		<td>".$codigo."</td>
		<td>".$nome."</td>
		<td>".$usuario."</td>
		
	</tr> 

	";
}			# é atribuido o valor da variável tabela a sessao, que é mandada para pagina excluir_bd. 
	 		$_SESSION['tabela'] = $tabela;

			break;


	}

	?>
	<tr>
		<td>Total de Registros Encontrados</td>
		<td colspan="3"><?php echo $total_registros ?></td>
	</tr>
	<br/>

	</table>
	<?php  
			if($total_registros >= 1 ){
	echo "
		
		<form action='excluir_bd.php' method='POST'>
					
			<fieldset>
			
		<legend>Escolha uma opção:</legend>
			Digite o código e confime a exclusão do registro.<br/>
 			<input type='text' name='id' required/>
			<input type='submit' value='Confimar'>
 	</fieldset>
 	
	</form>

				

	"; 

	}else {

		echo "<a href='formulario_excluir.php'>Volta para Tela de Exclusão</a>";
	
	}
	
	?>
		



	
	
</body>

</html>