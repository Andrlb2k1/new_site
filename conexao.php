<?php

//ini_set('display_errors', 1);
//error_reporting(1);

$db = new mysqli("localhost", "root", "", "php_db", "3310");

if ($db -> connect_errno){
	echo "Erro no banco de dados: {$db->connect_error}";
	exit();
}

//Inserindo dados
$password = '12112001';
$insert = "INSERT INTO `users` (
  `name`,
  `email`,
  `password`
)
VALUES
  (
    'Inserindo via PHP',
    'andre.lb865850@gmail.com',
    '{$password}'
  );";

$result = $db->query($insert);

if($result){
	echo "Salvo com sucesso ID => {$db->insert_id}";
}else{
	echo "Erro no Insert: {$db->error}";
}

//Consultando dados
$select = "SELECT * FROM users";
$result = $db->query($select);

if($result){
	//while($obj = $result->fetch_object()){
	//	echo "ID: {$obj->id} <br>";
	//	echo "Nome: {$obj->name} <br>";
	//	echo "Email: {$obj->email} <br>";
	//	echo "Registrado em: {$obj->created_at} <br>";
	//	echo "<hr>";
	//}

	while($obj = $result->fetch_array()){
		echo "ID: {$obj['id']} <br>";
		echo "Nome: {$obj['name']} <br>";
		echo "Email: {$obj['email']} <br>";
		echo "Registrado em: {$obj ['created_at']} <br>";
		echo "<hr>";
	}
}else{
	echo "Erro no SELECT: {$db->error}";
}

$db->close();