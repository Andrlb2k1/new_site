<?php

//ini_set('display_errors', 1);
//error_reporting(1);

$db = new mysqli("localhost", "root", "", "php_db", "3310");

if ($db -> connect_errno){
	echo "Erro no banco de dados: {$db->connect_error}";
	exit();
}

$select = "SELECT * FROM users";
$result = $db->query($select);

if($result){
	while($obj = $result->fetch_object()){
		echo "ID: {$obj->id} <br>";
		echo "Nome: {$obj->name} <br>";
		echo "Email: {$obj->email} <br>";
		echo "Registrado em: {$obj->created_at} <br>";
		echo "<hr>";
	}
}else{
	echo "Erro no SELECT: {$db->error}";
}

$db->close();