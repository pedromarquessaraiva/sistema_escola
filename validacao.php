<?php
	include "conexao_bd.php";
?>

<html>
<head>
	<meta charset="UTF-8"/>
	<script language="JavaScript" src="_javascript/funcoes.js"></script>
	<title>Autenticando usuário</title>

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
	echo "Você foi autenticado com sucesso! Aguarde um instante....";
	echo "<script>loginsucess_funcionario()</script>";
	}else{
	echo "Nome de usuário ou senha inválidos!, Aguarde um momento!";
	echo "<script>loginfaleid_funcionario()</script>";
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
	echo "<script>loginsucess_responsavel()</script>";
	} else{
	echo "Nome de usuário ou senha inválidos!, Aguarde um momento!";
	echo "<script>loginfaleid_resposanvel()</script>";
	}
        break;
}
 
 	?>



</body>

</html>