<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
	}
	?>


	<?php include "conexao_bd.php";	?>

<html>
<head>
	<meta charset="UTF-8"/>
	<script language="JavaScript" src="_javascript/funcoes.js"></script>
	<title>Autenticando usuário</title>

</head>
<body>


	<?php

		# a sessão é verificada se existe, e atribuida a variável tabela, que por sua vez é usada para definir qual tabela irá ser excluida
		$tabela = isset($_SESSION["tabela"])?$_SESSION["tabela"]:"";

				$cod = $_POST['id'];


			switch ($tabela) {

				case "aluno":
					
					mysql_query("DELETE FROM $tabela WHERE codigo = '$cod'");
					echo '<br/><script type="text/javascript">alert("Os Registros do Aluno foram deletado!<br/>");</script>';
					echo "<script>excluirSucesso()</script>";
					
					break;
				
				case "funcionario":
					
					mysql_query("DELETE FROM $tabela WHERE codigo = '$cod'");
					echo '<br/><script type="text/javascript">alert("Os Registros do Funcionario foram deletado!<br/>");</script>';
					echo "<script>excluirSucesso()</script>";
					break;

				case "responsavel":
					
					mysql_query("DELETE FROM $tabela WHERE codigo = '$cod'");
					echo '<br/><script type="text/javascript">alert("Os Registros do Responsável foram deletado!<br/>");</script>';
					echo "<script>excluirSucesso()</script>";
					break;

			}
		

?>

</body>

</html>