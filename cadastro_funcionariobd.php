<?php
	include "conexao_bd.php";
?>

<html>
<head>
	<title>cadastro no banco</title>
</head>

<body>
<?php


	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha= $_POST['senha'];
	$email= $_POST['email'];
	$cargo = $_POST['cargo'];
	$turno = $_POST['turno'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];


	$com = "INSERT INTO funcionario(nome,usuario,senha,email,cargo,turno,endereco,telefone)
				VALUES('$nome','$usuario','$senha','$usuario','$cargo','$turno','$endereco','$telefone')";

	if(!mysql_query($com,$conexao)){

			echo "Não foi possível inserir os dados!";
			exit();
	}

	echo "Foi gravado as informações do Funcionário $usuario";
?>
</body>

</html>