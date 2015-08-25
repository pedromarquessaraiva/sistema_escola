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
<link rel="stylesheet" type="text/css" href="_css/form.css">
<link rel="stylesheet" type="text/css" href="_css/estilos.css">
	</head>

<body>


<header id="cabecalho">

<ul><a href="logout.php"><li>Logout!</li></a></ul>
</header>

<aside id="lateral">

<nav id="menu">
	
<ul>

<li><a href="formulario_busca.php">Formulário de Busca</a></li>
<li><a href="formulario_aluno.php">Cadastro de Alunos</a></li>
<li><a href="formulario_funcionario.php">Cadastro de Funcionário</a></li>
<li><a href="formulario_responsavel.php">Cadastro do Responsável</a></li>
<li><a href="formulario_editar.php">Editar Cadastro</a></li>
<li><a href="formulario_excluir.php">Excluir Cadastro</a></li>

</ul>

</nav>

</aside>

<section id="corpo">
dasdasdasds
	</section>

<footer id="rodape">

	<p>Roda pé</p>
</footer>

</body>



</html>