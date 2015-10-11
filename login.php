<html>
<head>
    <meta charset="UTF-8"/>

<title>Sistema de login</title>
    <link rel="stylesheet" type="text/css" href="_css/form.css">
</head>


<body class="fundoLogin">
    
    <div id="login">
    <h2>Bem Vindo!</h2>
	   <form name="login" method="post" action="validacao.php">
           <label class="categoria">
               Categoria:
               <select name="categorias" required>
                   <option value="">Selecione</option>
                    <option value="funcionario">Funcionário </option>
                    <option value="responsavel">Responsável</option>
               </select>
           </label><br/><br/>
		      Usuario: <input class="user" type="text" name="usuario" placeholder="identifique-se" required><br/><br/>
		      Senha: <input class="senha" type="password" name="senha"placeholder="informe sua senha"required><br/><br/>
                     <input class="btn" type="submit" value="Entrar">
                    <input class="btn" type="reset" value="limpar" name="reset">

	</form>
    </div>


</body>

</html>