<?php

ini_set('display_errors', 0);
error_reporting(0);

$db = new mysqli("localhost", "root", "", "php_db", "3310");

if ($db -> connect_errno){
	echo "Erro no banco de dados: {$db->connect_error}";
	exit();
}

echo "Sem erros!";