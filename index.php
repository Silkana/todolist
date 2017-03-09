<?php

include 'db.php';

function getTasks(){
	
	$pdo = getpdo();

	$query = $pdo->prepare
	(
		'SELECT `id`, `title`, `goal`, `end_date` FROM `task`
	 '
	);
	$query->execute();
	$todoList = $query->fetchAll(PDO::FETCH_ASSOC);
	return $todoList;
}

$todoList = getTasks();

include 'templates/index.phtml';
?>