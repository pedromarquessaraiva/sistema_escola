
	
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
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
<li><a href="formulario_aluno.php">Cadastro de Alunos</a></li>
<li class="ativo"><a href="formulario_funcionario.php">Cadastro de Funcionário</a></li>
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



	<form name="formulario_funcionario" method="post" action="cadastro_funcionariobd.php">
		
			Nome: <input class="nome" type="text" name="nome" placeholder="Nome Completo" required><br/><br/>
			Usuário: <input class="usuario" type="text" name="usuario" placeholder="Nome de Usuários" required>
			Senha: <input class="senhaform" type="password" name="senha" placeholder="Senha de Acesso" required><br/><br/>
			E-mail: <input class="emailFormaFunc" type="email" name="email" placeholder="E-mail para Contatos" required>
			Cargo: <input class="cargoFunc" type="text" name="cargo" placeholder="Função na escola" required><br/><br/>
				<label class="turno" required>
			Turno:
				<select name="turno">
					<option value="">Selecione</option>
 					<option value="manha">Manhã</option>
 					<option value="tarde">Tarde</option>
				</select>
			</label>
			
			Logradouro: <input class="logradFunc" type="text" name="endereco" placeholder="Rua,Av" required><br/><br/>
			Telefone para Contato: <input type="text" name="telefone" placeholder="Telefone para Contato" required><br/><br/>
			<input class="btn" type="submit" value="Cadastrar" name="submit">
			<input class="btn" type="reset" value="Limpar" name="reset">
		</form>

	</div>

</section>



<footer id="rodape">

	<p>Roda pé</p>
</footer>


	</body>




</html>