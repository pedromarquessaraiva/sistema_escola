<?php 
//Faz a conexão com o banco de dados
include "conexao_bd.php"; ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Busca com jQuery ( Recriando )</title>
<script src="_javascript/jquery.js"></script>
<script type="text/javascript">
function objetoAjax(){

	var xmlhttp=false;

	try {

		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

	} catch (e) {

		try {

		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

		} catch (E) {

			xmlhttp = false;

  		}

	}



	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {

		xmlhttp = new XMLHttpRequest();

	}

	return xmlhttp;

}

function entrada(aluno,funcionario,tipoMovimentacao,responsavel)
{

	divResultado= document.getElementById('exemplo');
	var responsavel = document.getElementById("responsavel");

		ajax=objetoAjax();

	    divResultado.innerHTML= '<img src="images/ajax.gif">';
	    
	 ajax.open("GET", "busca_bd.php?aluno="+aluno+"&funcionario="+funcionario+"&tipoMovimentacao="+tipoMovimentacao+"&responsavel="+responsavel);

		ajax.onreadystatechange=function() {

			if (ajax.readyState==4) {

				//mostrar resultados en esta capa

				divResultado.innerHTML = ajax.responseText

			}

		}

		ajax.send(null)	

}
</script>

<body>
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
	$campo2 	= mysql_real_escape_string($_POST['campo2']);

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

	
	switch ($campo2) { //aqui começa switch

		case "entrada": // aqui começa o CASE ENTRADA


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
				$tipoMovimentacao = 1;

				echo "
					<form action='' method='POST'>

					<a href='javascript:entrada($aluno,$funcionario,$tipoMovimentacao,responsavel);' id='btn_entrada'>Entrada</a>
					$nome
					$hora
					<input type='radio' id='responsavel' value='pai'>Pai
					<input type='radio' id='responsavel' value='mae'>Mãe
					<input type='radio' id='responsavel' value='avo'>Avôs
                    </form>
					";
				}
		}
        
	} 			break;
		
		case "saida": // aqui começa o CASE SAIDA
			
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

				$verificar = mysql_query("SELECT * FROM movimentacao WHERE data = '$data' and aluno = '$aluno' and tipoMovimentacao = 'SAI'");
				
				if(mysql_num_rows($verificar) <= 0){

				$tipoMovimentacao = 2;

				echo "
					<form action='' method='POST'>

					<a href='javascript:entrada($aluno,$funcionario,$tipoMovimentacao,responsavel);' id='btn_entrada'>Saída</a>
					$nome
					$hora
					<input type='radio' name='responsavel' value='pai'>Pai
					<input type='radio' name='responsavel' value='mae'>Mãe
					<input type='radio' name='responsavel' value='avo'>Avôs
                    </form>
					";
				}
		}
        
	} 		

			break;
	}// aqui termina switch


		

	?>

	
	 <div id='exemplo'>




	</div>

</body>

</html>