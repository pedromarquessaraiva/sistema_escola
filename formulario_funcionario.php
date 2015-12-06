<!DOCTYPE HTML>
<html>
<head>

<title>Cadastro Funcionário</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
<<<<<<< 3c299ab2eabf23440c430b375f4e8fdda72a9426
                <a class="navbar-brand" href="painel.php">Sistema Escola</a>
=======
                <a class="navbar-brand" href="painel.php">Sistema Gerenciamento de Portaria Escolar</a>
>>>>>>> Links
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
                            <a class="active" href="formulario_funcionario.php"><i class="fa fa-male fa-fw"></i>Cadastro de Funcionário</a>
                        </li>
                        <li>
                            <a href="formulario_responsavel.php"><i class="fa fa-male fa-fw"></i> Cadastro do Responsável</a>
                        </li>
                       
                        <li>
                            <a href="formulario_editar.php"><i class="fa fa-clipboard  fa-fw"></i> Editar Cadastro</a>
                            
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
                <div class="col-lg-8">
                  
                   
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-male fa-fw"></i>Cadastro de Funcionário
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                   
                    <!--fomulario funcionario-->

<form role="form" name="formulario_funcionario" method="post" action="cadastro_funcionariobd.php">
            
            <div class="form-group">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome" placeholder="Nome Completo" required>
            </div>
                
            <div class="form-group">         
            <label>Endereço:</label>
            <input class="form-control" type="text" name="endereco" placeholder="Rua,Av" required>
            </div>

        <div class="row">
            <div class="col-lg-6 col-md-6">            
            <div class="form-group">
            <label>Usuário:</label>
            <input class="form-control" type="text" name="usuario" placeholder="Nome de Usuários" required>
            </div>
            </div>
            
            <div class="col-lg-6 col-md-6">              
            <div class="form-group">
            <label>Senha:</label>
            <input class="form-control" type="password" name="senha" placeholder="Senha de Acesso" required>
            </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-7 col-md-7"> 
            <div class="form-group">
            <label> E-mail:</label>
            <input class="form-control" type="email" name="email" placeholder="E-mail para Contatos" required>
            </div>
            </div>

            <div class="col-lg-5 col-md-5"> 
            <div class="form-group">
            <label>Cargo:</label>
            <input class="form-control" type="text" name="cargo" placeholder="Função na escola" required>
            </div> 
            </div> 
        </div>


         <div class="row">
            <div class="col-lg-5 col-md-5"> 
            <div class="form-group">         
                <label>Turno:</label>
                    <select class="form-control" name="turno" required>
                    
                        <option value="">Selecione</option>
                        <option value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                    
                    </select>
            </div>
            </div>  
            
            <div class="col-lg- col-md-7"> 
                <div class="form-group">         
                <label>Telefone para Contato:</label>
                <input class="form-control"type="text" name="telefone" placeholder="Telefone para Contato" required
            >
            </div>
            </div>
        </div>
           

            <input class="btn" type="submit" value="Cadastrar" name="submit">
            <input class="btn" type="reset" value="Limpar" name="reset">
        </form>








                        <!--fim formulario funcionario--> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Observação
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          
                            
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                </div>
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