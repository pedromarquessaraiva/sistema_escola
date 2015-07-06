<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "Você está logado! ;D";
	}
	?>


<?php include "conexao_bd.php"; ?>

<html>
<head>
    <meta charset="UTF-8"/>
	<script language="JavaScript" src="_javascript/funcoes.js"></script>
	<title>Lista de Usuário</title>

</head>
<body>

<?php

$tabela = $_POST['categorias'];
$nome = $_POST['buscar'];


	$resultado = mysql_query("select * FROM $tabela where nome like '%$nome%'") or die(mysql_error());

	switch ($tabela) {
	
		case "aluno":
		
	while ($resultado_tabela = mysql_fetch_array($resultado)){

			
 		  $codigo = $resultado_tabela['codigo'];
		  $nome  =  $resultado_tabela['nome'];
		  $idade = $resultado_tabela['idade'];
		  $endereco = $resultado_tabela['endereco'];
		  $turma = $resultado_tabela['turma'];
		  $turno = $resultado_tabela['turno'];
		  $professor = $resultado_tabela['professor'];
		  $telefone = $resultado_tabela['telefone'];
	
echo"	
	
	<table width='700' border='1'>
			
<tr>
			
			<td width='343'>Código</td>
			<td width='343'>Nome</td>
			<td width='343'>Idade</td>
			<td width='343'>Endereço</td>
			<td width='343'>Turma</td>
			<td width='343'>Turno</td>
			<td width='343'>Professor</td>
			<td width='343'>Telefone</td>
   		   <td rowspan='2'><a href=editar.php?codigo=$codigo>Editar</a></td>

</tr> 

<tr>
			<td>".$codigo."</td>
			<td>".$nome."</td>
			<td>".$idade."</td>
			<td>".$endereco."</td>
			<td>".$turma."</td>
			<td>".$turno."</td>
			<td>".$professor."</td>
			<td>".$telefone."</td>
			

			
</tr>

</table>

";


}

	$_SESSION['tabela'] = $tabela;

		break;
	
			case "funcionario":
		
		while ($resultado_tabela = mysql_fetch_array($resultado)){

			
 		  $codigo = $resultado_tabela['codigo'];
		  $nome  =  $resultado_tabela['nome'];
  		  $usuario = $resultado_tabela['usuario'];
		  $senha = $resultado_tabela['senha'];
		  $email = $resultado_tabela['email'];
		  $cargo = $resultado_tabela['cargo'];
		  $turno = $resultado_tabela['turno'];
		  $endereco = $resultado_tabela['endereco'];
		  $telefone = $resultado_tabela['telefone'];
	
	
	echo"	
	
	<table width='700' border='1'>
			
<tr>
			
			<td width='343'>Código</td>
			<td width='343'>Nome</td>
			<td width='343'>Usuário</td>
			<td width='343'>Senha</td>
			<td width='343'>E-mail</td>
			<td width='343'>Cargo</td>
			<td width='343'>Turno</td>
			<td width='343'>Endereço</td>
			<td width='343'>Telefone</td>
   		   <td rowspan='2'><a href=editar.php?codigo=$codigo>Editar</a></td>

</tr> 

<tr>
			<td>".$codigo."</td>
			<td>".$nome."</td>
			<td>".$usuario."</td>
			<td>".$senha."</td>
			<td>".$email."</td>
			<td>".$cargo."</td>
			<td>".$turno."</td>
			<td>".$endereco."</td>
			<td>".$telefone."</td>

			
</tr>

</table>

";


}

	$_SESSION['tabela'] = $tabela;

		break;

		case "responsavel":
		
	while ($resultado_tabela = mysql_fetch_array($resultado)){

			
 		  $codigo = $resultado_tabela['codigo'];
		  $nome  =  $resultado_tabela['nome'];
		  $usuario = $resultado_tabela['usuario'];
		  $senha = $resultado_tabela['senha'];
		  $email = $resultado_tabela['email'];

echo"	
<table width='700' border='1'>
			
<tr>
			
			<td width='343'>Código</td>
			<td width='343'>Nome</td>
			<td width='343'>Usuario</td>
			<td width='343'>Senha</td>
			<td width='343'>email</td>
		    <td rowspan='2'><a href=editar.php?codigo=$codigo>Editar</a></td>

</tr> 

<tr>
			<td>".$codigo."</td>
			<td>".$nome."</td>
			<td>".$usuario."</td>
			<td>".$senha."</td>
			<td>".$email."</td>
				
		

			
</tr>

</table>

";


}

	$_SESSION['tabela'] = $tabela;

		break;




}
	
?>

		<a href="formulario_editar.php">Volta para Painel de exclusão</a>
</body>

</html>