<?php
if (isset($_POST["id"])){
	$rowId = $_POST["id"];
	include 'db.php';

	$query = $pdo->prepare(
		'DELETE FROM `task` WHERE id = :id'
		);
	$ret = $query->execute(['id'=> $rowId]);
	echo($ret);
}

// include 'index.php';

?>