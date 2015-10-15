<?php 
		session_start();

		if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

			header("Location: login.php");
			exit;
		} else{
			
			echo "<div id ='logado'> Você está logado!</div>";
		}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Busca com jQuery ( Recriando )</title>

<link rel="stylesheet" type="text/css" href="_css/form.css">
<link rel="stylesheet" type="text/css" href="_css/estilos.css">

<script type="text/javascript" src="_javascript/jquery.js"></script>
<script type="text/javascript">


$(function(){
	
	//PESQUISA INSTANTANEA PELO INPUT
	$("#pesquisa").keyup(function(){
		//Recupera oque está sendo digitado no input de pesquisa
		var pesquisa = $(this).val();

		//Recupera oque foi selecionado
		var campo = $("#campo").val();

		//Recupera oque foi selecionado
		var campo2 = $("#campo2").val();

		//Verifica se foi digitado algo
		if(pesquisa != ''){
			//Cria um objeto chamado de 'dados' e guarda na propriedade 'palavra' a pesquisa e na propriedade campo o campo a ser pesquisado
			var dados = {
				palavra : pesquisa,
				campo 	: campo,
				campo2	: campo2
			}
			
			//Envia por AJAX pelo metodo post, a pequisa para o arquivo 'busca.php'
			//O paremetro 'retorna' é responsável por recuperar oque vem do arquivo 'busca.php'
			$.post('busca.php', dados, function(retorna){
				//Mostra dentro da ul com a class 'resultados' oque foi retornado
				$(".resultados").html(retorna);
			});
		}else{
			$(".resultados").html('');
		}
	});

	//PESQUISA INSTANTANEA PELO SELECT
	$("#campo").change(function(){
		//Recupera oque está sendo digitado no input de pesquisa
		var pesquisa = $("#pesquisa").val();

		//Recupera oque foi selecionado
		var campo 		= $(this).val();

		//Verifica se foi digitado algo
		if(pesquisa != ''){
			//Cria um objeto chamado de 'dados' e guarda na propriedade 'palavra' a pesquisa e na propriedade campo o campo a ser pesquisado
			var dados = {
				palavra : pesquisa,
				campo 	: campo
			}
			
			//Envia por AJAX pelo metodo post, a pequisa para o arquivo 'busca.php'
			//O paremetro 'retorna' é responsável por recuperar oque vem do arquivo 'busca.php'
			$.post('busca.php', dados, function(retorna){
				//Mostra dentro da ul com a class 'resultados' oque foi retornado
				$(".resultados").html(retorna);
			});
		}else{
			$(".resultados").html('');
		}
	});

	$("#campo2").change(function(){
		//Recupera oque está sendo digitado no input de pesquisa
		var pesquisa = $("#pesquisa").val();

		//Recupera oque foi selecionado
		var campo2 		= $(this).val();

		//Verifica se foi digitado algo
		if(pesquisa != ''){
			//Cria um objeto chamado de 'dados' e guarda na propriedade 'palavra' a pesquisa e na propriedade campo o campo a ser pesquisado
			var dados = {
				palavra : pesquisa,
				campo2 	: campo2
			}
			
			//Envia por AJAX pelo metodo post, a pequisa para o arquivo 'busca.php'
			//O paremetro 'retorna' é responsável por recuperar oque vem do arquivo 'busca.php'
			$.post('busca.php', dados, function(retorna){
				//Mostra dentro da ul com a class 'resultados' oque foi retornado
				$(".resultados").html(retorna);
			});
		}else{
			$(".resultados").html('');
		}
	});

	//PESQUISA DE FORMULÀRIO
	$("#form-pesquisa").submit(function(e){
		//Cancela a ação padrao o formulário, impedindo que ele atualize a página
		e.preventDefault();

		//Recupera oque está sendo digitado no input de pesquisa
		var pesquisa = $("#pesquisa").val();

		//Recupera oque foi selecionado
		var campo = $("#campo").val();
		var campo2 = $("#campo2").val();

		
		//Se não for digitado nada, então ele mostra um alert
		if(pesquisa == ''){
			alert('Informe sua Pequisa!');
		}else{
			//Cria um objeto chamado de 'dados' e guarda na propriedade 'palavra' a pesquisa
			//Cria um objeto chamado de 'dados' e guarda na propriedade 'palavra' a pesquisa e na propriedade campo o campo a ser pesquisado
			var dados = {
				palavra : pesquisa,
				campo 	: campo,
				campo2	: campo2
			}
			
			//Envia por AJAX pelo metodo post, a pequisa para o arquivo 'busca.php'
			//O paremetro 'retorna' é responsável por recuperar oque vem do arquivo 'busca.php'
			$.post('busca.php', dados, function(retorna){
				$(".resultados").html(retorna);
			});
		}
	});
});
</script>
</head>

<body>

	<header id="cabecalho"></header>


	<aside id="lateral">

<nav id="menu">
	
<ul>


<li class="ativo"><a href="formulario_busca.php">Formulário de Busca</a></li>
<li><a href="formulario_aluno.php">Cadastro de Alunos</a></li>
<li><a href="formulario_funcionario.php">Cadastro de Funcionário</a></li>
<li><a href="formulario_responsavel.php">Cadastro do Responsável</a></li>
<li><a href="formulario_editar.php">Editar Cadastro</a></li>
<li><a href="formulario_excluir.php">Excluir Cadastro</a></li>

</ul>

</nav>

</aside>

<section id="corpo">
	

	<h2 id="titulo">Preencha os campos abaixo</h2>
	<hr>



<div id="formulario">


<form id="form-pesquisa" action="" method="post">
	

<label class="turno"><!-- reaproveitando uma classe-->

	Pesquisar por:
	<select id="campo" required>
		<!-- Os valores das opções devem ser os mesmos nomes dos campos dos quias se quer a pesquisa -->
		<option value="">Selecione</option>
		<option value="manha">Manhã</option>
		<option value="tarde">Tarde</option>
	</select><br><br>
</label>

<label class="turno"><!-- reaproveitando uma classe-->
	Entrada ou Saída:
		<select id="campo2">
		<!-- Os valores das opções devem ser os mesmos nomes dos campos dos quias se quer a pesquisa -->
		<option value="">Selecione</option>
		<option value="entrada">Entrada</option>
		<option value="saida">Saída</option>
	</select><br><br>
</label>

	<input type="text" name="pesquisa" id="pesquisa" placeholder="Digite sua pesquisa"required>
	 
    <input class="btn" type="submit" name="enviar" value="Pesquisar">
</form>

<form method='POST' action='busca_bd.php' class="resultados">


</form>
</div>
</section>
	
</div>
</body>
</html>