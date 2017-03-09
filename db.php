<?php
function getpdo(){
	$pdo = new PDO('mysql:host=localhost;dbname=todo_list', 'todo_list', 'todo_list');
	$pdo->exec('SET NAMES UTF8');

	return $pdo;
}
?>