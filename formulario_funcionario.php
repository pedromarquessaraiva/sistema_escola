<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "Você está logado! ;D";
	}
	?>
	
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
	<title>Cadastro</title>
</head>

	<body>

	<form name="formulario_funcionario" method="post" action="cadastro_funcionariobd.php">
		
			Nome: <input type="text" name="nome" placeholder="Nome Completo"><br/><br/>
			Usuário:<input type="text" name="usuario" placeholder="Nome de Usuários"><br/><br/>
			Senha: <input type="password" name="senha" placeholder="Senha de Acesso"><br/><br/>
			E-mail: <input type="email" name="email" placeholder="E-mail para Contatos"><br/><br/>
			Cargo:<input type="text" name="cargo" placeholder="Função na escola"><br/><br/>
				<label>
			Turno:
				<select name="turno">
 					<option value="manha" selected>Manhã</option>
 					<option value="tarde">Tarde</option>
				</select>
			</label>
			<br/><br/>Logradouro:<input type="text" name="endereco" placeholder="Rua,Av"><br/><br/>
			Telefone para Contato:<input type="text" name="telefone" placeholder="Telefone para Contato"><br/><br/>
			<input type="submit" value="Cadastrar" name="submit">

		</form>


	</body>


</html>