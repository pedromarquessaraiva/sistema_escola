<?php
	include "conexao_bd.php";
?>

<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: form_login.php");
		exit;
	} else{
		echo "Você está logado! ;D";
	}
	

?>
<html>

<head>
	<title>Painel</title>
</head>

<body>
	<br/>
<a href="logout.php">Sair!</a>


</body>



</html>