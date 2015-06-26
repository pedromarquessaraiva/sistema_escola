<?php

$host = 'localhost';
$user = 'root';
$password = '';
$bank = 'sistema_bd';


// conexao com banco de dados
	$conexao = mysql_connect($host,$user,$password);
	
		if (!$conexao){
	
			echo "Problema ao conectar no banco de dados. Entre em contato com Suporte!";
				exit();
	}
// Seleciona o banco de dados
		if (!mysql_select_db($bank,$conexao)){
	
			echo "Não foi possivel selecionar o banco de dados";
			exit();			
	}

?>