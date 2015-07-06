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

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
	<title>Tela de atualização</title>
</head>

<body>




	<?php 

					
		$id = $_GET["codigo"];
		$tabela = isset($_SESSION["tabela"])?$_SESSION["tabela"]:"";

		
		$resultado = mysql_query("select * FROM $tabela where codigo like $id") or die(mysql_error());


		switch ($tabela) {
			case "aluno":
				
				while ($resultado_tabela = mysql_fetch_array($resultado)){

			
 		  $codigo = $resultado_tabela['codigo'];
		  $nome  =  $resultado_tabela['nome'];
		  $idade = $resultado_tabela['idade'];
		  $endereco = $resultado_tabela['endereco'];
		  $turma = $resultado_tabela['turma'];
		  $turno = $resultado_tabela['turno'];
		  $professor = $resultado_tabela['professor'];
		  $telefone = $resultado_tabela['telefone'];
		
		}

		echo "
				<form method='POST' action='editar_bd.php'>

				<input type='hidden' name='codigo' value='$id'><br/>
				Nome:<input type='text' name='nome' value='$nome'><br/>
				Idade:<input type='text' name='idade' value='$idade'><br/>
				Endereço:<input type='text' name='endereco' value='$endereco'><br/>
				Turma:<input type='text' name='turma' value='$turma'><br/>
				Turno:<input type='text' name='turno' value='$turno'><br/>
				Professor:<input type='text' name='professor' value='$professor'><br/>
				Telefone:<input type='text' name='telefone' value='$telefone'><br/>
				<input type='submit' value='Salvar'>

				</form>

				";
				break;
			
			


			case "funcionario":

				while ($resultado_tabela = mysql_fetch_array($resultado)){

			
 		  $codigo = $resultado_tabela['codigo'];
		  $nome  =  $resultado_tabela['nome'];
  		  $usuario = $resultado_tabela['usuario'];
		  $senha = $resultado_tabela['senha'];
		  $email = $resultado_tabela['email'];
		  $cargo = $resultado_tabela['cargo'];
		  $turno = $resultado_tabela['turno'];
		  $endereco = $resultado_tabela['endereco'];
		  $telefone = $resultado_tabela['telefone'];

		 }

		 echo "

		 		<form method='POST' action='editar_bd.php'>

		 		<input type='hidden' name='codigo' value='$codigo'><br/>
		 		Nome:<input type='text' name='nome' value='$nome'><br/>
		 		Usuário:<input type='text' name='usuario' value='$usuario'><br/>
		 		Senha:<input type='text' name='senha' value='$senha'><br/>
		 		E-mail:<input type='email' name='email' value='$email'><br/>
		 		Cargo:<input type='text' name='cargo' value='$cargo'><br/>
		 		Turno:<input type='text' name='turno' value='$turno'><br/>
		 		Endereço: <input type='text' name='endereco' value='$endereco'><br/>
		 		Telefone: <input type='text' name='telefone' value='$telefone'><br/>

				<input type='submit' value='Salvar'>

				</form>

		 ";
				break;


			case "responsavel":
		
	


			while ($resultado_tabela = mysql_fetch_array($resultado)){

			
 		  $codigo = $resultado_tabela['codigo'];
		  $nome  =  $resultado_tabela['nome'];
		  $usuario = $resultado_tabela['usuario'];
		  $senha = $resultado_tabela['senha'];
		  $email = $resultado_tabela['email'];

		}

		echo "
				<form method='POST' action='editar_bd.php'>
				<input type='hidden' name='codigo' value='$codigo'><br/>
				Nome:<input type='text' name='nome' value='$nome'><br/>
				Usuário:<input type='text' name='usuario' value='$usuario'><br/>
				Senha:<input type='text' name='senha' value='$senha'><br/>
				E-mail:<input type='email' name='email' value='$senha'><br/>
				

				<input type='submit' value='Salvar'>

				</form>


				";

			break;
		}

		


	?>




</form>

<a href="formulario_editar.php">Voltar ao Painel de Exclusão</a>
</body>
</html>