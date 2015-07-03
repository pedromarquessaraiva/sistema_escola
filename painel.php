<?php
	include "conexao_bd.php";
?>

<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "Você está logado! ;D";
	}
	

?>
<html>

<head>
	<title>Painel do Funcionário</title>
	    <meta charset="UTF-8"/>

</head>

<body>
	<br/>



<a href="logout.php">Sair!</a><br/>
<a href="formulario_aluno.php">Cadastro de Alunos</a><br/>
<a href="formulario_funcionario.php">Cadastro de Funcionário</a><br/>
<a href="formulario_responsavel.php">Cadastro do Responsável</a><br/>
<a href="formulario_excluir.php">Excluir Cadastro</a>




</body>



</html>