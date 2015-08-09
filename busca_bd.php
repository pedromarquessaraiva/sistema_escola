<?php 
//Faz a conexão com o banco de dados
include "conexao_bd.php"; ?>

<?php 
		session_start();

		if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

			header("Location: login.php");
			exit;
		} else{
			
		}

?>

<?php 
	ini_set('default_charset','UTF-8');
	mysql_set_charset('utf8');
	date_default_timezone_set('America/Sao_Paulo');
	$data = date('Y/m/d');
	$hora = date('H:i:s');




$tipoMovimentacao = $_GET['tipoMovimentacao'];
$aluno = $_GET['aluno'];
$funcionario = $_GET['funcionario'];
$responsavel = $_POST['responsavel'];

if($tipoMovimentacao == 1 ){
		$resultado = "INSERT INTO movimentacao(data,hora,aluno,funcionario,tipoMovimentacao)
							VALUES('$data','$hora','$aluno','$funcionario','ENT')";

		if (!mysql_query($resultado)) {
			echo "Não foi possível gravar os dados";
			exit();
		}

		echo "Foi gravado com Sucesso!";

}else if ($tipoMovimentacao == 2 ){

		$resultado = "INSERT INTO movimentacao(data,hora,aluno,funcionario,tipoMovimentacao)
							VALUES('$data','$hora','$aluno','$funcionario','SAI')";

		if (!mysql_query($resultado)) {
			echo "Não foi possível gravar os dados";
			exit();
		}

		echo "Foi gravado com Sucesso!";
	}
	
?>