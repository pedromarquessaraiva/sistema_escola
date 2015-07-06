<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "Você está logado! ;D";
	}

?>
	
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
	<title>Tela de Excluir</title>
</head>

<body>
	<p>Tela de Excluir!</p>
	<form name="formulario_excluir" method="POST" action="lista_editar.php">
		<label>
			Categoria:<br/>
				<select name="categorias">
 					<option value="aluno" selected>Aluno</option>
 					<option value="funcionario">Funcionário</option>
 					<option value="responsavel">Responsável</option>
				</select>
		</label>
		<br/><br/>
		<input type="text" name="buscar" placeholder="Digite o nome do usuário" required><br/>
		<input type="submit" value="Pesquisar">
	</form>

	<a href="painel.php">Volta a Painel Central</a>

</body>

</html>
