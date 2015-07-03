<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "Você está logado! ;D";
	}
	?>
	
<?php
	include "conexao_bd.php";
?>

<html>
<head>
    <meta charset="UTF-8"/>
	<title>cadastro no banco dos funcionarios</title>
</head>

<body>
<?php

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$endereco = $_POST['endereco'];
	$turma = $_POST['turma'];
	$turno = $_POST['turno'];
	$professor = $_POST['professor'];
	$telefone = $_POST['telefone'];



	$inserir = "INSERT INTO aluno(nome,idade,endereco,turma,turno,professor,telefone)
				VALUES('$nome','$idade','$endereco','$turma','$turno','$professor','$telefone')";

	if(!mysql_query($inserir,$conexao)) {

			echo "Não foi possível inserir os dados!";
			exit();
	}
	echo "<br/>";
	echo "Foi Gravado<br/>";
	echo "<a href='painel.php'>Volte ao Painel</a>";
?>
</body>

</html>