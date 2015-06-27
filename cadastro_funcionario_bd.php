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
	$senha= $_POST['senha'];
	$cargo = $_POST['cargo'];
	$turno = $_POST['turno'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];


	$com = "INSERT INTO funcionario(nome,senha,cargo,turno,endereco,telefone)
				VALUES('$nome','$senha','$cargo','$turno','$endereco','$telefone')";

	if(!mysql_query($com,$conexao)){

			echo "Não foi possível inserir os dados!";
			exit();
	}

	echo "foi gravado";
?>
</body>

</html>