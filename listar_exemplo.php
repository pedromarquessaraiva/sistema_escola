<?php

$id_aluno =  $_GET['id_aluno'];
$funcionario = $_GET['funcionario'];

date_default_timezone_set('America/Sao_Paulo');
	$data = date('Y/m/d');
	$hora = date('H:i:s');



echo "id do aluno e ".$id_aluno;
echo "<br/>id do funcionario e $funcionario";
echo "hora é $hora";
echo "<br/>data é ".$data;


?>