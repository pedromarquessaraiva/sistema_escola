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
	<title>Cadastro do Responsável no Banco</title>
	    <meta charset="UTF-8"/>

</head>

<body>
<?php

	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];

	$inserir = "INSERT INTO responsavel(nome,usuario,senha,email)
				VALUES('$nome','$usuario','$senha','$email')";

	if(!mysql_query($inserir,$conexao)) {

			echo "Não foi possível inserir os dados!";
			exit();
	}

	echo "<br/>Foi Gravado com Sucesso os seus Dados!<br/>";
	echo "<a href='painel.php'>Ir para Painel<br/></a>";

	?>
</body>

</html>