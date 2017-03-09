<?php


if(isset($_GET["id"], $_GET["inTitle"], $_GET["inGoal"], $_GET["inEndDate"])){
	
	$inTitle = $_GET["inTitle"];
	$inGoal = $_GET["inGoal"];
	$inEndDate = $_GET["inEndDate"];
	$id = $_GET["id"];

	include 'templates/update.phtml';
}







if(isset($_POST["inTitle"], $_POST["inGoal"], $_POST["inEndDate"])){

	$inTitle = $_POST["inTitle"];
	$inGoal = $_POST["inGoal"];
	$inEndDate = $_POST["inEndDate"];
	$id = $_POST["id"];

	include 'db.php';

	$query = $pdo->prepare(

		'UPDATE `task` 
	 	 SET `title`= :inTitle,
			 `goal`= :inGoal,
			 `end_date`= :inEndDate
		 WHERE id = :id'
		);

	$query->execute(['id' => $id, 'inTitle' => $inTitle , 'inGoal' => $inGoal , 'inEndDate' => $inEndDate]);
	include 'index.php';
}

?>