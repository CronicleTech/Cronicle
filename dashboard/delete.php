<?php
	session_start();
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "cronicle";

	$db = mysqli_connect($host, $user, $password, $database);


	$table = $_SESSION["email"];
	$taskId = $_GET['rn'];


	$sqldelete = "DELETE FROM `$table` WHERE `id` = $taskId";

	$querydelete = mysqli_query($db, $sqldelete);

	header("location: https://cronicle.space/dashboard/");
?>