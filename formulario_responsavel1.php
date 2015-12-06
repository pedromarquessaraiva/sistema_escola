<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "";
	}
	?>
	
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
	<title>Cadastro do Responsável do aluno</title>
</head>

<body>

	<form name="formulario_resposavel" method="POST" action="cadastro_responsavelbd.php">
		Nome: <input type="text" name="nome"><br/><br/>
		Usuário: <input type="text" name="usuario"><br/><br/>
		Senha: <input type="password" name="senha"><br/><br/>
		E-mail: <input type="email" name="email"><br/><br/>
		<input type="submit" value="Cadastrar" name="submit">
	</form>

</body>

</html>
