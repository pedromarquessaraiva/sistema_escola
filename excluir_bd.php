<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "Você está logado! ;D";
	}
	?>


	<?php include "conexao_bd.php";	?>

	<?php

		# a sessão é verificada se existe, e atribuida a variável tabela, que por sua vez é usada para definir qual tabela irá ser excluida
		$tabela = isset($_SESSION["tabela"])?$_SESSION["tabela"]:"";

				$cod = $_POST['id'];


			switch ($tabela) {

				case "aluno":
					
					mysql_query("DELETE FROM $tabela WHERE codigo = '$cod'");
					echo "<br/>Os Registros do Aluno foram deletado!<br/>";
					echo "<a href='formulario_excluir.php'>Volta para Tela de exclusão</a>";
					
					break;
				
				case "funcionario":
					
					mysql_query("DELETE FROM $tabela WHERE codigo = '$cod'");
					echo "<br/>Os Registros do funcionario foram deletado!<br/>";
					echo "<a href='formulario_excluir.php'>Volta para Tela de Exclusão</a>";
					break;

				case "responsavel":
					
					mysql_query("DELETE FROM $tabela WHERE codigo = '$cod'");
					echo "<br/>Os Registros do Responável foram deletado!<br/>";
					echo "<a href='formulario_excluir.php'>Volta para Tela de Exclusão</a>";
					break;

			}
		

?>
