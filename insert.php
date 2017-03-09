<?php
 if (isset($_POST["inTitle"], $_POST["inGoal"], $_POST["inEndDate"])){


	$inTitle = $_POST['inTitle'];
	$inGoal = $_POST['inGoal'];
	$inEndDate = $_POST['inEndDate'];


	include 'db.php';


	$query = $pdo->prepare(
	
	'INSERT INTO `task`(`title`, `goal`, `end_date`) VALUES (:inTitle, :inGoal, :inEndDate)'

	);
	
	$ret = $query->execute([ 'inTitle' => $inTitle , 'inGoal' => $inGoal, 'inEndDate' => $inEndDate]);
}

include 'index.php';


?>