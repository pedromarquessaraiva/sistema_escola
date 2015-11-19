<?php 
	session_start();

	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){

		header("Location: login.php");
		exit;
	} else{
		echo "";
	}
	?>

<?php include "conexao_bd.php"; ?>

<html>
<head>
    <meta charset="UTF-8"/>
	
<!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script language="JavaScript" src="_javascript/funcoes.js"></script>
	<title>Editar cadastro</title>

</head>
<body>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistema Escola</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
              
                <!-- /.dropdown -->
                <!--colocar alertas referente a alunos inicio-->
                <!--
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                   
                    </ul>
                -->
                    <!-- /.dropdown-alerts -->
                    
                </li>
                <!--colocar alertas referente a alunos fim-->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                                  -->                      
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-text fa-fw"></i> Formulário de Busca</a>
                        </li>
                        <li>
                            <a href="formulario_aluno.php"><i class="fa fa-child fa-fw"></i> Cadastro de Alunos</a> 
                           
                        </li>
                        <li>
                            <a href="formulario_funcionario.php"><i class="fa fa-male fa-fw"></i>Cadastro de Funcionário</a>
                        </li>
                        <li>
                            <a href="formulario_responsavel.php"><i class="fa fa-male fa-fw"></i> Cadastro do Responsável</a>
                        </li>
                       
                        <li>
                            <a class="active" href="formulario_editar.php"><i class="fa fa-clipboard  fa-fw"></i> Editar Cadastro</a>
                            
                        </li>
                        <li>
                            <a href="formulario_excluir.php"><i class="fa fa-trash fa-fw"></i> Excluir Cadastro</a>
                            
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bem Vindo!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-child fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Alunos</div>
                                    <div>Lista de Alunos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">veja detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-male fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Funcionários</div>
                                    <div>Lista de funcionarios</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">veja detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-clipboard fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Cadastro</div>
                                    <div>Editar cadastros </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Acesso Rápido</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-trash fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Excluir</div>
                                    <div>Excluir cadastros</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Acesso Rápido</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                  
                   
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clipboard fa-fw"></i>Edição de cadastro
                        </div>

                        

                        <!--CONTEUDO ENTRA AQUI-->


                        
             <div class="panel-body">




<?php

$tabela = $_POST['categorias'];
$nome = $_POST['buscar'];


    $resultado = mysql_query("SELECT * FROM $tabela where nome like '%$nome%'") or die(mysql_error());

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
    
   <table class='table table-striped' width='100%' border='0' align='center'>
            
<tr>
            
            <td width='343'>Código</td>
            <td width='343'>Nome</td>
            <td width='343'>Idade</td>
            <td width='343'>Endereço</td>
            <td width='343'>Turma</td>
            <td width='343'>Turno</td>
            <td width='343'>Professor</td>
            <td width='343'>Telefone</td>
           <td><a class='btn btn-novo'href=editar.php?codigo=$codigo>Editar</a></td>

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
    
  <table class='table table-striped' width='100%' border='0' align='center'>
            
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
            <td><a class='btn btn-novo'href=editar.php?codigo=$codigo>Editar</a></td>
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
<table class='table table-striped' width='100%' border='0' align='center'>
            
<tr>
            
            <td width='343'>Código</td>
            <td width='343'>Nome</td>
            <td width='343'>Usuario</td>
            <td width='343'>Senha</td>
            <td width='343'>email</td>
            <td><a class='btn btn-novo'href=editar.php?codigo=$codigo>Editar</a></td>

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
       
        <input  class="btn"  name="" type="button" onClick="window.location = 'formulario_editar.php' " value="Voltar">


					
			</div>
	

                        <!-- /.panel-heading -->
                       <!-- /.panel-body -->
             </div>
                    <!-- /.panel -->
         </div>
                <!-- /.col-lg-8 -->
               
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
    <script src="js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>




</body>



</html>

