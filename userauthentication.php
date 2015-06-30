<?php
	include "conexao_bd.php";
?>

<html>
<head>
	<title>autenticando usuario</title>

<script type="text/javascript">

	function loginsucessfully(){
		setTimeout("window.location='painel.php'",1000);
	}

	function loginfaleid(){
		setTimeout("window.location='login.php'",1000);
	}

</script>

</head>
<body>


<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$categoria = $_POST['categorias'];

	switch ($categoria) 
{

    case "funcionario":
   
   	$consulta = mysql_query("SELECT * from funcionario where usuario = '$usuario' and '$senha'");
	$row = mysql_num_rows($consulta);

	if($row > 0 ){

	session_start();
	$_SESSION['usuario'] = $_POST['usuario'];
	$_SESSION['senha'] = $_POST['senha'];
	echo "Você foi autenticado com sucesso! Aguarde um instante.";
	echo "<script>loginsucessfully()</script>";

	} else{
	echo "Nome de usuário ou senha inválidos!, Aguarde um momento!";
	echo "<script>loginfaleid()</script>";
	}

        break;
   
    case "responsavel":

  	$consulta = mysql_query("SELECT * from responsavel where usuario = '$usuario' and '$senha'");
	$row = mysql_num_rows($consulta);

	if($row > 0 ){

	session_start();
	$_SESSION['usuario'] = $_POST['usuario'];
	$_SESSION['senha'] = $_POST['senha'];
	echo "Você foi autenticado com sucesso! Aguarde um instante.";
	echo "<script>loginsucessfully()</script>";

	} else{
	echo "Nome de usuário ou senha inválidos!, Aguarde um momento!";
	echo "<script>loginfaleid()</script>";
	}
        break;
}
 
 	?>



</body>

</html>