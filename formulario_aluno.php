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
	<title>Cadastro</title>
</head>

<body>

	<form name="formulario_aluno" method="POST" action="cadastro_alunobd.php">
		Nome: <input type="text" name="nome"><br/><br/>
		Idade:<input type="text" name="idade"><br/><br/>
		Endereço:<input type="text" name="endereco"><br/><br/>
		Turma:<input type="text" name="turma"><br/><br/>
		Turno:<input type="text" name="turno"><br/><br/>
		Professor:<input type="text" name="professor"><br/><br/>
		Telefone para Contato:<input type="text" name="telefone"><br/><br/>
		<input type="submit" value="Cadastrar" name="submit">
	</form>

</body>

</html>
