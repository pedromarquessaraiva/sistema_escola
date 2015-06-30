<html>
<head>

<title>Sistema de login</title>
</head>


<body>
	<form name="login" method="post" action="validacao.php">
<label>
Categoria:
<select name="categorias">
 <option value="funcionario">Funcionário</option>
 <option value="responsavel">Responsável</option>
</select>
</label><br/><br/>
		usuario:<input type="text" name="usuario"><br/><br/>
		senha:<input type="password" name="senha"><br/><br/>
		<input type="submit" value="Entrar">

	</form>


</body>

</html>