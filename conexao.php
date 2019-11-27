<?php
$host = "localhost";// Geralmente Localhost
$usuario = "root";//usuário do seu banco de dados
$password = "";// senha do banco de dados
$banco = "softexpert";// tabela do banco de dadosa

$con=mysql_connect($host,$usuario,$password) or die ('Conexão não realizada');
mysql_select_db($banco, $con) or die ('Banco não encontrado');
?>