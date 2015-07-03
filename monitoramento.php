

<?php
	include "conexao_bd.php";
?>

<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "Você está logado! ;D";
	}
	

?>
<html>
<head>
	    <meta charset="UTF-8"/>

	<title>Monitoramento dos Pais!</title>
</head>

<body>
	<br/>
<a href="logout.php">Sair!</a><br/>

</body>
</html>