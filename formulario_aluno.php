
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cadastro</title>

<link rel="stylesheet" type="text/css" href="_css/form.css">
<link rel="stylesheet" type="text/css" href="_css/estilos.css">


</head>




<body>

	<header id="cabecalho">



<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "<div id ='logado'> Você está logado!</div>";
	}
	?>
	

	</header>


<aside id="lateral">

<nav id="menu">
	
<ul>


<li><a href="formulario_busca.php">Formulário de Busca</a></li>
<li class="ativo"><a href="formulario_aluno.php">Cadastro de Alunos</a></li>
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

<form  name="formulario_aluno" method="POST" action="cadastro_alunobd.php">

    	Nome: <input type="text" name="nome" placeholder="Nome do Aluno"><br/><br/>
		Idade:   <input class="idade" placeholder="00" type="text" name="idade"><br/><br/>
		Endereço: <input class="end" placeholder="Digite o endereço completo"type="text" name="endereco"><br/><br/>
		Turma:    <input class="turma" placeholder="Qual a turma?"type="text" name="turma">
        <label class="turno">
			Turno:
				<select name="turno">
                    <option>Selecione</option>
 					<option value="manha" selected>Manhã</option>
 					<option value="tarde">Tarde</option>
				</select>
		</label>
		Professor: <input class="prof" placeholder="Nome do professor"type="text" name="professor"><br/><br/>
		Telefone para Contato: <input class="tel" placeholder="XX99999-9999" type="text" name="telefone"><br/><br/>
        <input class="btn"  type="button" value="Voltar" onClick="history.go(-1)"> 
        <input class="btn" type="reset" value="Limpar" name="reset">
        <input class="btn" type="submit" value="Cadastrar" name="submit"  >
        
	</form>
</div>
</body>

</html>


	</section>

<footer id="rodape">

	<p>Roda pé</p>
</footer>

</body>



</html>
