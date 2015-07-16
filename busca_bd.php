<?php 
//Faz a conexão com o banco de dados
include "conexao_bd.php"; ?>

<?php 
		session_start();

		if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

			header("Location: login.php");
			exit;
		} else{
			
			echo "Você está logado! ;D<br/>";
		}

?>

<?php 
	ini_set('default_charset','UTF-8');
	mysql_set_charset('utf8');

$entrada = $_POST['est'];
$aluno = $_POST['codigoaluno'];
$funcionario = $_POST['codigofuncionario'];
$responsavel = $_POST['responsavel'];
$data = $_POST['data'];
$hora = $_POST['hora'];


	$resultado = "INSERT INTO movimentacao(data,hora,responsavel,aluno,tipoMovimentacao,funcionario)
							VALUES('$data','$hora','$responsavel','$aluno	','$entrada','$funcionario')";


		if (!mysql_query($resultado)) {
			echo "Não foi possível gravar os dados";
		}

		#header("Location: formulario_busca.php");
?>