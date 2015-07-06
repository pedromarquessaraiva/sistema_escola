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
	<title></title>
</head>

<body>

<?php 

		$tabela = isset($_SESSION["tabela"])?$_SESSION["tabela"]:"";

		switch ($tabela) {

			case "aluno":
		  
		  $codigo = $_POST['codigo'];
		  $nome  =  $_POST['nome'];
		  $idade = $_POST['idade'];
		  $endereco = $_POST['endereco'];
		  $turma = $_POST['turma'];
		  $turno = $_POST['turno'];
		  $professor = $_POST['professor'];
		  $telefone = $_POST['telefone'];

		  	mysql_query("update $tabela set nome='$nome', idade = '$idade', endereco = '$endereco', turma = '$turma', turno = '$turno', professor = '$professor', telefone = '$telefone' where codigo = '$codigo'");

		  		echo "Os dados de $nome foram atualizados!";

				break;

		case "funcionario":

 		  $codigo = $_POST['codigo'];
		  $nome  =  $_POST['nome'];
  		  $usuario = $_POST['usuario'];
		  $senha = $_POST['senha'];
		  $email = $_POST['email'];
		  $cargo = $_POST['cargo'];
		  $turno = $_POST['turno'];
		  $endereco = $_POST['endereco'];
		  $telefone = $_POST['telefone'];

		  	mysql_query("update $tabela set nome ='$nome',usuario ='$usuario', senha ='$senha', email = '$email', cargo = '$cargo', turno = '$turno', endereco = '$endereco', telefone ='telefone' where codigo = '$codigo' ");	

		  		echo "Os dados de $nome foram atualizados!";

				break;


		case "responsavel":
		

		  $codigo = $_POST['codigo'];
		  $nome  =  $_POST['nome'];
		  $usuario = $_POST['usuario'];
		  $senha = $_POST['senha'];
		  $email = $_POST['email'];


			mysql_query("update $tabela set nome = '$nome', usuario = '$usuario', senha = '$senha', email = '$email' where codigo = '$codigo'");

				echo "Os dados de $nome foram atualizados!";

				break;			
						
		}


?>

<br/><a href="formulario_editar.php">Volte ao Painel de Exclusão</a><br/>
<a href="painel.php">Volte ao Painel Central</a><br/>

</body>


</html>