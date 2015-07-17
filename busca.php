<?php 
//Faz a conexão com o banco de dados
include "conexao_bd.php"; ?>

<?php
	//Seta os cacteres vindos do banco em UTF8
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET charecter_set_client=utf8');
	mysql_query('SET charecter_set_results=utf8');
	//Recupera a pesquisa feita
	$pesquisa 	= mysql_real_escape_string($_POST['palavra']);
	//Recupera oque foi selecionado
	$campo 		= mysql_real_escape_string($_POST['campo']);
	// Recupera a data e hora para o sistema!
	date_default_timezone_set('America/Sao_Paulo');
	$data = date('Y/m/d');
	$hora = date('H:i:s');

	//inicia a sessão, para ser resgatada!
	session_start();
	// variável funcionário recebe o nome(sessão) do usuário nessa linha!
	$funcionario = isset($_SESSION["usuario"])?$_SESSION["usuario"]:"";

	// Recupera o codigo do funcionário que se lgou no sistema
	$consultaFuncionario = mysql_query("SELECT codigo from funcionario where usuario like '%$funcionario%'");

	

	while($resultadoFuncionario = mysql_fetch_array($consultaFuncionario)){
		//o variável funcionário recebe o código dele nessa linha!
		$funcionario = $resultadoFuncionario['codigo'];
	}

	$sql = "SELECT * FROM aluno WHERE nome LIKE '%$pesquisa%' and turno like '%$campo%'";

	//Excuta a SQL
	$query = mysql_query($sql) or die("Erro ao Pesquisar");

	//Se não for encontrado nada, então diz: 'Nada Encontrado...', se não retorna o resultado
	if(mysql_num_rows($query) <= 0){
		echo 'Nada Encontrado...';
	}else{
	
		//Como é retornado um array, então precisamos colocar novamente a váriavel '$campo' onde colocamos a nome do campo a ser exibido
		while($resultado = mysql_fetch_assoc($query)){

			$nome = $resultado['nome'];
			$aluno = $resultado['codigo'];

				$verificar = mysql_query("SELECT * FROM movimentacao WHERE data = '$data' and aluno = '$aluno' and tipoMovimentacao = 'ENT'");
				
				if(mysql_num_rows($verificar) <= 0){

				echo "
					<form action='busca_bd.php' method='POST'>
					<input type='submit' name='est' value='ENTRADA'>

					$nome
					$hora
					<input type='hidden' name='codigofuncionario' value='$funcionario'>
					<input type='hidden' name='codigoaluno' value='$aluno'>
					<input type='hidden' name='data' value='$data'>
					<input type='hidden' name='hora' value='$hora'>
					<input type='radio' name='responsavel' value='pai'>Pai
					<input type='radio' name='responsavel' value='mae'>Mãe
					<input type='radio' name='responsavel' value='avo'>Avôs
                    </form>
					";
				}
		}
        
	} 
	
		
	

	?>